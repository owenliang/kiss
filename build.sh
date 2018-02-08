#!/bin/bash

cd fe
hash=`npm run release | grep Hash: | awk '{print $2}'`
cd -

cd be
echo "<?php return \"${hash}\";" > common/config/hash.php
php init --env=Production --overwrite=a
cd -

cd be/frontend/web
rm -rf js image css favicon.ico  tinymce
cd -

cd fe/dist
cp -r js image css favicon.ico  tinymce ../../be/frontend/web/
cd -