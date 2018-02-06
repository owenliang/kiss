webpackJsonp([1],{12:function(A,p){A.exports="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAADw0lEQVR4Xu2b/XXVMAzFbyeADYAJChNAJ4BOAEwATABsABNAJ6BMAJ2AdgJggzIBnNsTP4yeHUmO7ZeE+J+e08Qf92dZVqX0CP3bXQAvADwCcH+Y/hLAVwDvAfzouaSjnpMBeA3gjTInn7/tta6eAD4AeGYU9hHAc+O7k17rBcAjPgjqAqEHgJT4XwBeAjgf1D4ZjsYdsZ3NIbQGkNt5mjfFxe324AiPe0JoCcAjPmjuDqEVgBLxB4HQAsAU8QECYwXGBrfEcWCcQN9RrdUGwGuOAGRLnXlNBIMkBkcSQslY2blqAqgpPiy4OYRaAHLiXwF4p2218rwphBoAcuLPHJGfxqgZhKkAeohvehymAOgpvhmEUgCHEN8EQgkAxu2fEoe25pnXfEJuA06Gq1Prv3vuBUBn9AUAQ9a49RQf5k1BuAZACAyiTM0DYE7iq0GwAsiJvxhSWybajV6aZAkWADnxV4N4mt2hWzEEDcASxE86DmMAliS+GEIOwBLFF0FIAeAV9z1x1c3pzGs+h+m2p+Il+qp7AP7xWRIAxfOeDwWLMMaSxIc1pyAwPmCcsIMQA1iTeDOEACAnnulrWkPXcpVm387no5YQADC2Z4wfN4pn/c4cVjoX1vP1FATWJE4JgCJ57tcqfuw4nBAASTyO1K9p56WV0ZrjwstnAuCVxzR0aKzMahXcnuZbcy7qYoU6tEsCkFS0CbXwWevf+vlvxwRXFJNyEGNjrAnAGcXkMq45CGsBcHPFx3EA8/eEIauzEsTSATCq5bFnie3aIkaeKUufGBqDLDqe+Jsg7ZiGb4bokL35Btd6LWJcAwplub8qNQDhuTvHB8C13tYA5BVrFR6/R2t44Og4GwC51LVDy+7V0+hzGq3/bADICNMTYMmAxZN2nw2AbyKvYDlu8e7GQjzHYDYAXAtJ2HVpf1c/y664BoyElPYLQ5T2d/XbAGgu1Xuvbhbwl4DLFDcfsE+gFKCr3+YDNh+gE3CZ1OYENye4I1BqOVsgNBAoBejqt90Cug/0ZVj+ByfIGrulWOoyxUqRIFNw/DM8bqNWbjkC/Gb/YTSi9QvwQwCQWSj1KzYLAJmdSX5pUWkHcwkR/l5bK7PP3H1XmU8blBNzQCY348YjwP/coHXkWk8LYHGXGyW/bFGPqwUABUorMPjOvVesc+XiAO+cphykZ1HeIqpcsGcu9vUUOeVcrP5Ia0gC9CyKZ4yF1PhbAs+ueOaaAoAZ5Juyl2Vx3kVxTJa46G35U/6r69ic3rk8FvBz8EfcoDG/tLe+P/j4G58kVqRCAAAAAElFTkSuQmCC"},2:function(A,p){},4:function(A,p,e){A.exports='<!DOCTYPE html> <html lang=en> <head> <meta http-equiv=Content-type content="text/html; charset=utf-8"/> <title>树莓派3B开启openvpn</title> </head> <body> <div id=page-container> <div id=article-info> <div id=article-title><a href=#>树莓派3B开启openvpn</a></div> <div id=article-date>2018-02-06</div> </div> <div id=content-container> <p>刚刚从树莓派1B升级到3B，性能的确提高很大，像PHP写的网站都是瞬间打开的，几乎没有等候时间，已经完全可以作为一个日常开发的小服务器了。</p> <p>为了可以在任何地方访问家中的树莓派，我需要在树莓派上安装一个Openvpn服务。<span id=more-2765></span></p> <h1>前置条件</h1> <p>首先，家中的树莓派必须可以外网访问，我家是联通宽带，具有动态公网IP。</p> <p>一般路由器都支持类似花生壳的工具，通过上报自己的公网IP到DNS服务商，从而可以通过固定域名访问到路由器，这样就不怕IP变来变去了。</p> <p>其次，路由器一般支持端口映射，可以将到达路由器某个端口的流量转发到内网某个IP的某个PORT上。</p> <h1>VPN原理</h1> <p>VPN是一个服务进程，通过TCP/UDP可以访问到。为了让树莓派上的VPN可以被外网连接，需要上述”前置条件”来帮助我们把内部端口映射到公网。</p> <p>假设我在公司利用VPN客户端连接到了家中的树莓派VPN服务，其实相当于在树莓派和公司电脑之间搭了一个桥，这个桥对于公司电脑来说就是一块虚拟的网卡。</p> <p>后续当我们在公司电脑试图访问家中的IP地址时，流量会经过这个虚拟网卡到达VPN进程，由VPN进程继续向内网IP转发。</p> <h1>VPN意义</h1> <p>既然通过VPN可以在公司直接访问家里的任何IP和PORT，那么此时就和坐在家里没有任何区别了。</p> <p>我们可以给树莓派打开samba，http，ssh等各种服务，随心所欲的连接与调试代码。</p> <p>尤其现在树莓派3B性能非常好，的确是个不错的<em><strong>全球工作站</strong></em>。</p> <h1>怎么安装VPN</h1> <p>openvpn本身安装很繁琐，不过树莓派有个开源项目让一切变得超级简单：<a href=https://github.com/pivpn/pivpn>pivpn</a>，里面有详细的安装步骤。</p> <h2>服务端</h2> <p>一些安装的要点参考博客：<a href=http://haipeng.me/2017/12/12/raspberry-pi-vpn-remote-access/ >《使用树莓派Raspberry Pi搭建VPN并实现远程访问》</a>。</p> <p>其中有几个注意点：</p> <ol> <li>安装时选择UDP或者TCP协议都可以，但是端口号一定要改一下，因为默认端口号一般都被运营商封杀了。</li> <li>尝试在VPN服务器上dig @8.8.8.8 www.baidu.com，如果连续可以解析成功则选择google DNS，否则说明运营商或者路由器对DNS做了拦截，此时你应该选择Custom dns设置DNS地址为路由器网关，例如192.168.1.1。</li> </ol> <h2>客户端</h2> <p>Openvpn官方提供了windows、mac等标准客户端，谷歌市场或者github可以下载到android版本的客户端。</p> <p>为了连接VPN，需要将安装中产生的.ovpn文件导入到客户端，接下来连接并输入密码即可连接。</p> <p>在客户端中勾选允许服务端推送网络配置变更（VPN服务端会推送DNS配置到客户端的/etc/resolve.conf），勾选自动重连。</p> <h2>shadowsocks</h2> <p>目前我还没有找到同时开启openvpn和shadowsocks的方法，一旦开启shadowsocks就会导致openvpn掉线。</p> <p>&nbsp;</p> <p>&nbsp;</p> </div> <a href=/ > <div id=home-btn> <img src='+e(12)+"> <div id=home-btn-tip>BACK HOME</div> </div> </a> </div> </body> </html>"},7:function(A,p,e){"use strict";(function(A){e(0),e(2),e(4),A(document).ready(function(){})}).call(p,e(1))}},[7]);