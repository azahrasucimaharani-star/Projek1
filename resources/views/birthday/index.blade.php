�<!doctype html>
{{-- resources/views/birthday/index.blade.php — Konversi Blade dari index (1).html (PRD F1-F10, satu halaman). --}}
{{-- Seluruh konten personal berasal dari config/birthday.php via $birthday (pengganti blok CONFIG). --}}
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<meta name="robots" content="noindex">
<title>{{ $birthday['title'] ?? 'For My Dear' }}</title>
<link rel="icon" type="image/png" href="{{ asset('assets/favicon-heart.png') }}?v={{ filemtime(public_path('assets/favicon-heart.png')) }}">
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}?v={{ filemtime(public_path('favicon.ico')) }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Space+Grotesk:wght@400;500;700&family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
<style>
:root{--bg:#050506;--fg:#f2f2f2;--muted:#a9a9b0;--red:#f4a4c0;--red2:#fbc7dc;--line:#33333a;box-sizing:border-box;padding-top:env(safe-area-inset-top,0px);padding-bottom:env(safe-area-inset-bottom,0px)}
@media (prefers-color-scheme:dark){:root:not([data-theme="light"]){--bg:#050506;--fg:#f2f2f2;--muted:#a9a9b0;--red:#f4a4c0;--red2:#fbc7dc;--line:#33333a}}
:root[data-theme="dark"]{--bg:#050506;--fg:#f2f2f2;--muted:#a9a9b0;--red:#f4a4c0;--red2:#fbc7dc;--line:#33333a}
html{scroll-padding-top:env(safe-area-inset-top,0px)}
body{margin:0;background:var(--bg);color:var(--fg);font-family:'Space Grotesk',system-ui,sans-serif;cursor:auto;overflow-x:hidden}
.bg{position:fixed;inset:0;z-index:0;background:var(--bgimg,none) center/cover no-repeat,var(--bg)}
.bg::after{content:"";position:absolute;inset:0;background:linear-gradient(rgba(5,5,6,.55),rgba(5,5,6,.75))}
canvas{position:fixed;inset:0;width:100%;height:100%;z-index:1;mix-blend-mode:screen;pointer-events:none}
main>section>*{position:relative;z-index:2}
#c{filter:url(#goo) drop-shadow(0 0 14px rgba(244,164,192,.55))}
.letter::-webkit-scrollbar,.album::-webkit-scrollbar{display:none}
h1,h2,h3{font-family:'Anton',Impact,sans-serif;font-weight:400;margin:0}
/* nav */
nav{position:fixed;top:env(safe-area-inset-top,0px);left:0;right:0;z-index:6;display:flex;align-items:center;justify-content:space-between;gap:12px;padding:14px 24px;transition:background .3s,backdrop-filter .3s}
nav.s{background:rgba(5,5,6,.6);backdrop-filter:blur(10px)}
.logo{font-family:'Anton',Impact,sans-serif;font-size:22px;letter-spacing:3px;text-transform:uppercase}
.logo i{color:var(--red2);font-style:normal}
.actions{display:flex;gap:10px;flex-wrap:wrap;justify-content:flex-end}
.btn{--mx:50%;--my:50%;position:relative;overflow:hidden;cursor:pointer;min-height:44px;padding:0 22px;border-radius:999px;border:1px solid var(--line);background:rgba(20,20,24,.55);backdrop-filter:blur(8px);color:var(--fg);font:700 14px 'Space Grotesk',sans-serif;letter-spacing:.04em;display:inline-flex;align-items:center;gap:10px;transition:border-color .25s,transform .2s ease-out}
.btn::before{content:"";position:absolute;inset:0;background:radial-gradient(120px circle at var(--mx) var(--my),rgba(251,199,220,.55),transparent 70%);opacity:0;transition:opacity .25s}
.btn:hover::before,.btn:focus-visible::before{opacity:1}
.btn:hover,.btn:focus-visible{border-color:var(--red2);outline:none}
.btn:focus-visible{box-shadow:0 0 0 3px rgba(251,199,220,.45)}
.btn>*{position:relative}
.btn.solid{background:var(--red);border-color:var(--red)}
.eq{display:inline-flex;gap:2px;align-items:flex-end;height:14px}
.eq b{width:3px;height:4px;background:currentColor;border-radius:2px}
.on .eq b{animation:eq .8s ease-in-out infinite alternate}
.on .eq b:nth-child(2){animation-delay:.2s}.on .eq b:nth-child(3){animation-delay:.4s}
@keyframes eq{to{height:14px}}
/* hero */
.hero{min-height:100vh;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;padding:110px 24px 60px;box-sizing:border-box}
.hero h1{font-size:clamp(56px,14vw,168px);line-height:.95;letter-spacing:2px;text-transform:uppercase;color:#fff;mix-blend-mode:difference}
.name{margin-top:18px;font-family:'Anton',Impact,sans-serif;font-size:clamp(20px,4vw,40px);letter-spacing:.3em;color:#d9d9de}
.hint{margin:26px 0 0;color:var(--muted);font-size:16px;max-width:38ch;line-height:1.6}
.cue{margin-top:48px;width:26px;height:44px;border:2px solid #6b6b73;border-radius:14px;position:relative}
.cue::after{content:"";position:absolute;left:50%;top:8px;width:4px;height:8px;margin-left:-2px;border-radius:2px;background:var(--red2);animation:cue 1.6s infinite}
@keyframes cue{60%{transform:translateY(14px);opacity:0}}
/* proud */
.proud{min-height:120vh;display:flex;align-items:center;justify-content:center;padding:0 24px}
.proud p{max-width:960px;margin:0;font-family:'Playfair Display',Georgia,'Times New Roman',serif;font-style:italic;font-weight:500;font-size:clamp(30px,5.4vw,72px);line-height:1.25}
.w{color:#3a3a42;transition:color .35s,text-shadow .35s}
.w.lit{color:#fff;text-shadow:0 0 24px rgba(244,164,192,.55)}
/* reasons */
.reasons{max-width:1100px;margin:0 auto;padding:80px 24px 120px}
.reasons h2{font-size:clamp(36px,6vw,72px);text-transform:uppercase;margin-bottom:40px}
.rgrid{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:24px}
/* end */
.card{opacity:0;transform:translateY(60px) scale(.96);transition:opacity .8s,transform .8s cubic-bezier(.2,.8,.2,1)}
.card.in{opacity:1;transform:none}
.ci{height:100%;box-sizing:border-box;padding:32px;border:1px solid var(--line);border-radius:20px;background:linear-gradient(160deg,rgba(30,30,36,.7),rgba(10,10,12,.7));backdrop-filter:blur(6px);transition:transform .15s ease-out,border-color .3s}
.ci:hover{border-color:var(--red2)}
.ci .g{font-size:28px;color:var(--red2)}
.ci h3{font-size:30px;margin:14px 0 10px}
.ci p{margin:0;color:#c4c4cb;line-height:1.7;font-size:16px}
/* end */
.end{padding:60px 0 140px;text-align:center;overflow:hidden}
.marq{display:flex;width:max-content;animation:mq 28s linear infinite;font-family:'Anton',Impact,sans-serif;font-size:clamp(60px,12vw,150px);text-transform:uppercase;color:transparent;-webkit-text-stroke:1.5px rgba(255,255,255,.35);white-space:nowrap}
.marq span{padding-right:.5em}
@keyframes mq{to{transform:translateX(-50%)}}
.end h2{margin:50px 24px 28px;font-size:clamp(36px,7vw,88px);text-transform:uppercase;line-height:1}
/* misc */
.ring{display:none}
.panel{position:fixed;inset:0;z-index:10;display:none;align-items:center;justify-content:center;padding:24px;background:rgba(5,5,6,.82);backdrop-filter:blur(10px)}
.panel.open{display:flex;animation:fi .3s}
@keyframes fi{from{opacity:0}}
.xbtn{position:absolute;top:calc(14px + env(safe-area-inset-top,0px));right:14px;z-index:3;min-height:40px;padding:0 16px}
/* ucapan */
.letter{position:relative;width:100%;max-width:680px;max-height:100%;overflow:auto;scrollbar-width:none;box-sizing:border-box;padding:56px 44px 40px;border-radius:28px;background:linear-gradient(#0d0d10,#0d0d10) padding-box,conic-gradient(from var(--a,0deg),#f4a4c0,#33333a,#fbc7dc,#33333a,#f4a4c0) border-box;border:2px solid transparent;animation:up .5s cubic-bezier(.2,.8,.2,1),spin 6s linear infinite}
@property --a{syntax:"<angle>";inherits:false;initial-value:0deg}
@keyframes spin{to{--a:360deg}}
@keyframes up{from{transform:translateY(40px) scale(.96);opacity:0}}
.chipbtn{display:inline-flex;align-items:center;gap:8px;padding:6px 14px;border-radius:999px;border:1px solid transparent;background:rgba(244,164,192,.15);color:var(--red2);font:700 13px 'Space Grotesk',sans-serif;margin-bottom:16px;cursor:pointer;transition:border-color .25s,background .25s}
.chipbtn:hover{border-color:var(--red2);background:rgba(244,164,192,.28)}
.letter h2{font-size:40px;letter-spacing:1px;margin-bottom:18px}
.msg{margin:0;font-size:19px;line-height:1.85;color:#dcdce1;white-space:pre-line;min-height:6em}
.msg.t::after{content:"";display:inline-block;width:2px;height:1.1em;margin-left:3px;vertical-align:middle;background:var(--red2);animation:bl 1s steps(1) infinite}
@keyframes bl{50%{opacity:0}}
.sign{margin-top:24px;font-family:'Anton',Impact,sans-serif;font-size:22px;letter-spacing:2px;color:var(--red2)}
/* album */
.album{position:relative;width:100%;max-width:520px;max-height:100%;overflow-y:auto;overflow-x:hidden;scrollbar-width:none;text-align:center;padding:56px 12px 8px}
.slide.swap{animation:sw .45s cubic-bezier(.2,.8,.2,1)}
@keyframes sw{from{opacity:0;transform:translateX(var(--dx,40px))}}
.pframe{position:relative;margin:0 auto;max-width:380px;padding:16px;background:linear-gradient(145deg,#24242b,#0c0c0f);border:2px solid #f2f2f2;box-shadow:inset 0 0 0 5px #0c0c0f,inset 0 0 0 6px var(--red),0 20px 60px rgba(244,164,192,.25)}
.pframe .o{position:absolute;width:26px;height:26px;border:3px solid var(--red2)}
.o.a{top:-9px;left:-9px;border-right:0;border-bottom:0}.o.b{top:-9px;right:-9px;border-left:0;border-bottom:0}
.o.c{bottom:-9px;left:-9px;border-right:0;border-top:0}.o.d{bottom:-9px;right:-9px;border-left:0;border-top:0}
.pframe .d2{position:absolute;left:50%;width:12px;height:12px;margin-left:-6px;background:var(--red2);transform:rotate(45deg)}
.d2.t{top:-7px}.d2.bt{bottom:-7px}
.mat{aspect-ratio:3/4;overflow:hidden;background:#000}
.mat img{width:100%;height:100%;object-fit:cover;display:block}
.ph{width:100%;height:100%;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,#1a1a20,#0b0b0d);color:#6b6b73;font-size:14px}
.cap{margin-top:26px}
.cap h3{font-size:30px;letter-spacing:1px}
.cap .dt{color:var(--red2);font-size:13px;font-weight:700;margin:6px 0 10px}
.cap p{margin:0 auto;max-width:40ch;color:#c4c4cb;line-height:1.7}
.pager{display:flex;align-items:center;justify-content:center;gap:14px;margin-top:22px}
.dots{display:flex;gap:8px}
.dots i{width:9px;height:9px;border-radius:50%;background:#3a3a42;transition:.3s}
.dots i.on{width:26px;border-radius:5px;background:var(--red2)}
.btn[disabled]{opacity:.35;pointer-events:none}
@media (max-width:700px){nav{padding:12px 14px}.btn{padding:0 14px;font-size:13px}.logo{font-size:18px}.letter{padding:56px 24px 28px}.btn .lbl{display:none}.btn.keep .lbl{display:inline}}
@media (hover:none){body{cursor:auto}.ring{display:none}}
@media (prefers-reduced-motion:reduce){.marq,.letter{animation:none}.card{opacity:1;transform:none}}
</style>
</head>
<body>
<div class="bg" id="bg"></div>
<canvas id="c" aria-hidden="true"></canvas>
<canvas id="c2" aria-hidden="true"></canvas>
<svg width="0" height="0" style="position:absolute" aria-hidden="true"><filter id="goo" color-interpolation-filters="sRGB"><feGaussianBlur stdDeviation="9"/><feColorMatrix values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 22 -9"/></filter></svg>

<nav id="nav">
<div class="logo">for my dear<i>.</i></div>
<div class="actions">
<button type="button" class="btn" id="bMusic" aria-pressed="false" title="Putar atau matikan lagu"><span class="eq"><b></b><b></b><b></b></span><span class="lbl">Musik</span></button>
<button type="button" class="btn keep" id="bMsg"><span>✉</span><span class="lbl">Ucapan</span></button>
<button type="button" class="btn solid keep" id="bAlbum"><span>❖</span><span class="lbl">Album</span></button>
</div>
</nav>

<main>
<section class="hero">
<h1>Happy<br>Birthday</h1>
<div class="name" id="nm"></div>
<p class="hint">Maap sayangg aku cuma bisa kasih ini  (╥‸╥)</p>
<div class="cue" aria-hidden="true"></div>
</section>
<section class="proud"><p id="proud"></p></section>
<section class="reasons"><h2 id="rt"></h2><div class="rgrid" id="rs"></div></section>
<section class="end">
<div class="marq" aria-hidden="true" id="mq"></div>
<h2 id="endT"></h2>
<a class="btn solid" href="{{ route('journey') }}"><span>❖</span><span>You and Memories</span></a>
</section>
</main>

<div class="panel" id="pMsg" role="dialog" aria-modal="true" aria-labelledby="tMsg">
<button class="btn xbtn" type="button" data-close>Tutup</button>
<div class="letter">
<button type="button" class="chipbtn" id="chipBtn" title="Translate ucapan"><span id="chipLbl">Translate</span></button><h2 id="tMsg"></h2><p class="msg" id="msg"></p><div class="sign" id="sign"></div></div>
</div>
<div class="panel" id="pAlbum" role="dialog" aria-modal="true" aria-label="Album foto">
<button class="btn xbtn" type="button" data-close>Tutup</button>
<div class="album">
<div class="slide" id="slide"></div>
<div class="pager"><button class="btn" type="button" id="prev" aria-label="Foto sebelumnya">←</button><div class="dots" id="dots"></div><button class="btn" type="button" id="next" aria-label="Foto berikutnya">→</button></div>
</div>
</div>
<div class="ring" id="ring"></div>

<script>
/* Isi dari config/birthday.php — ubah di sana, bukan di sini (PRD: satu blok CONFIG). */
var CONFIG={
  name: {{ Js::from($birthday['name']) }},
  sign: {{ Js::from($birthday['sign']) }},
  bgImage: {{ Js::from($birthday['bgImageUrl']) }},
  song: {{ Js::from($birthday['songUrl']) }},
  songYoutubeId: {{ Js::from($birthday['songYoutubeId'] ?? '') }},
  greetingTitle: {{ Js::from($birthday['greetingTitle']) }},
  greeting: {{ Js::from($birthday['greeting']) }},
  greetingId: {{ Js::from($birthday['greetingId']) }},
  photos: {{ Js::from($birthday['photos']) }},
  proud: {{ Js::from($birthday['proud']) }},
  reasonsTitle: {{ Js::from($birthday['reasonsTitle']) }},
  reasons: {{ Js::from($birthday['reasons']) }},
  marquee: {{ Js::from($birthday['marquee']) }},
  endTitle: {{ Js::from($birthday['endTitle']) }}
};
/* ============================ */
(function(){
var $=function(i){return document.getElementById(i)};
var reduce=window.matchMedia&&window.matchMedia('(prefers-reduced-motion: reduce)').matches;
$('nm').textContent=CONFIG.name;$('tMsg').textContent=CONFIG.greetingTitle;$('sign').textContent=CONFIG.sign;
$('rt').textContent=CONFIG.reasonsTitle;$('endT').textContent=CONFIG.endTitle;
if(CONFIG.bgImage)$('bg').style.setProperty('--bgimg','url("'+CONFIG.bgImage+'")');
var m=$('mq');for(var q=0;q<2;q++){for(var z=0;z<4;z++){var sp=document.createElement('span');sp.textContent=CONFIG.marquee;m.appendChild(sp)}}

/* teks bangga: menyala saat scroll */
var pe=$('proud'),words=[];
CONFIG.proud.split(' ').forEach(function(w){var s=document.createElement('span');s.className='w';s.textContent=w;pe.appendChild(s);pe.appendChild(document.createTextNode(' '));words.push(s)});
function onScroll(){
$('nav').classList.toggle('s',scrollY>20);
var r=pe.getBoundingClientRect(),vh=innerHeight,p=Math.min(1,Math.max(0,(vh*.75-r.top)/(r.height+vh*.2)));
var n=Math.round(p*words.length);words.forEach(function(w,i){w.classList.toggle('lit',i<n)})}
addEventListener('scroll',onScroll,{passive:true});onScroll();

/* kartu alasan */
var io=new IntersectionObserver(function(es){es.forEach(function(e){if(e.isIntersecting){e.target.classList.add('in');io.unobserve(e.target)}})},{threshold:.25});
CONFIG.reasons.forEach(function(r,i){
var c=document.createElement('div');c.className='card';c.style.transitionDelay=(i*120)+'ms';
c.innerHTML='<div class="ci"><div class="g">✦</div><h3></h3><p></p></div>';
c.querySelector('h3').textContent=r.t;c.querySelector('p').textContent=r.p;
var ci=c.querySelector('.ci');
c.addEventListener('pointermove',function(e){var b=c.getBoundingClientRect();ci.style.transform='perspective(700px) rotateX('+(((e.clientY-b.top)/b.height-.5)*-9)+'deg) rotateY('+(((e.clientX-b.left)/b.width-.5)*9)+'deg)'});
c.addEventListener('pointerleave',function(){ci.style.transform=''});
$('rs').appendChild(c);io.observe(c)});

/* tombol interaktif (magnet + sorot) */
[].forEach.call(document.querySelectorAll('.btn'),function(b){
b.addEventListener('pointermove',function(e){var r=b.getBoundingClientRect();b.style.setProperty('--mx',(e.clientX-r.left)+'px');b.style.setProperty('--my',(e.clientY-r.top)+'px');
if(!reduce&&!b.classList.contains('xbtn'))b.style.transform='translate('+((e.clientX-r.left-r.width/2)*.12)+'px,'+((e.clientY-r.top-r.height/2)*.18)+'px)'});
b.addEventListener('pointerleave',function(){b.style.transform=''})});

/* panel */
var lastFocus=null,typer=null,cur=0,glang='en';
function open(p){lastFocus=document.activeElement;document.body.style.overflow='hidden';p.classList.add('open');var b=p.querySelector('[data-close]');if(b)b.focus()}
function closeAll(){[$('pMsg'),$('pAlbum')].forEach(function(p){p.classList.remove('open')});clearInterval(typer);document.body.style.overflow='';if(lastFocus)lastFocus.focus()}
function typeGreeting(){var el=$('msg'),t=glang==='en'?CONFIG.greeting:CONFIG.greetingId;clearInterval(typer);el.classList.add('t');if(reduce){el.textContent=t;el.classList.remove('t');return}
el.textContent='';var n=0;typer=setInterval(function(){el.textContent=t.slice(0,++n);if(n>=t.length){clearInterval(typer);el.classList.remove('t')}},34)}
function openMsg(){open($('pMsg'));typeGreeting()}
$('chipBtn').addEventListener('click',function(){glang=glang==='en'?'id':'en';$('chipLbl').textContent=glang==='en'?'Translate':'English';typeGreeting()});
$('bMsg').addEventListener('click',openMsg);
$('bAlbum').addEventListener('click',function(){show(0,0);open($('pAlbum'))});
[].forEach.call(document.querySelectorAll('[data-close]'),function(b){b.addEventListener('click',closeAll)});
[$('pMsg'),$('pAlbum')].forEach(function(p){p.addEventListener('click',function(e){if(e.target===p)closeAll()})});

/* album 1 foto per halaman */
function show(i,dir){cur=i;var p=CONFIG.photos[i],s=$('slide');
s.innerHTML='<div class="pframe"><span class="o a"></span><span class="o b"></span><span class="o c"></span><span class="o d"></span><span class="d2 t"></span><span class="d2 bt"></span><div class="mat"></div></div><div class="cap"><h3></h3><div class="dt"></div><p></p></div>';
var mat=s.querySelector('.mat');
if(p.src){var im=document.createElement('img');im.src=p.src;im.alt=p.title;mat.appendChild(im)}else{var ph=document.createElement('div');ph.className='ph';ph.textContent='Foto '+(i+1);mat.appendChild(ph)}
s.querySelector('h3').textContent=p.title;s.querySelector('.dt').textContent=p.date;s.querySelector('p').textContent=p.text;
s.style.setProperty('--dx',(dir>=0?40:-40)+'px');s.classList.remove('swap');void s.offsetWidth;if(!reduce)s.classList.add('swap');
$('dots').innerHTML=CONFIG.photos.map(function(_,k){return '<i class="'+(k===i?'on':'')+'"></i>'}).join('');
$('prev').disabled=i===0;$('next').disabled=i===CONFIG.photos.length-1}
$('prev').addEventListener('click',function(){if(cur>0)show(cur-1,-1)});
$('next').addEventListener('click',function(){if(cur<CONFIG.photos.length-1)show(cur+1,1)});
addEventListener('keydown',function(e){if(e.key==='Escape')closeAll();if($('pAlbum').classList.contains('open')){if(e.key==='ArrowLeft')$('prev').click();if(e.key==='ArrowRight')$('next').click()}});

/* musik (MP3 utama; video YouTube resmi sebagai cadangan; browser butuh satu interaksi dulu) */
var bM=$('bMusic'),want=true,ytId=CONFIG.songYoutubeId||'',ytPlayer=null,ytReady=false,ytLoading=false,useYT=false;
var audio=CONFIG.song?new Audio(CONFIG.song):null;
if(audio){audio.loop=true;audio.volume=.6}
function setM(on){bM.classList.toggle('on',on);bM.setAttribute('aria-pressed',on?'true':'false')}
function playMP3(){var r=audio.play();if(r&&r.then)r.then(function(){setM(true)}).catch(function(){setM(false)})}
function loadYT(){
if(!ytId||ytPlayer||ytLoading)return;ytLoading=true;
var tag=document.createElement('script');tag.src='https://www.youtube.com/iframe_api';document.head.appendChild(tag);
var box=document.createElement('div');box.style.cssText='position:fixed;width:4px;height:4px;left:-10px;bottom:0;opacity:.01;pointer-events:none';
box.innerHTML='<div id="ytSong"></div>';document.body.appendChild(box);
var iv=setInterval(function(){
if(!(window.YT&&YT.Player))return;clearInterval(iv);
ytPlayer=new YT.Player('ytSong',{videoId:ytId,playerVars:{loop:1,playlist:ytId},
events:{onReady:function(){ytReady=true;if(want)ytPlayer.playVideo()},
onStateChange:function(e){setM(e.data===YT.PlayerState.PLAYING)}}});
},300)}
function play(){
if(useYT){if(ytReady)ytPlayer.playVideo();else loadYT();return}
if(audio)playMP3();else if(ytId){useYT=true;loadYT()}else setM(false)}
function stopAll(){want=false;setM(false);if(audio&&!audio.paused)audio.pause();if(ytReady)ytPlayer.pauseVideo()}
if(audio)audio.addEventListener('error',function(){
if(ytId){useYT=true;setM(false);loadYT();bM.title='Memutar dari YouTube: Bryan Adams \u2013 Heaven'}
else{want=false;setM(false);bM.title='File lagu belum ada ('+CONFIG.song+')'}});
bM.addEventListener('click',function(){
if(useYT){if(ytReady&&ytPlayer.getPlayerState()===YT.PlayerState.PLAYING){want=false;ytPlayer.pauseVideo();setM(false)}else{want=true;play()}return}
if(audio&&!audio.paused){stopAll()}else{want=true;play()}});
play();
addEventListener('pointerdown',function f(e){
if(!want||bM.contains(e.target))return;
if(useYT){if(ytReady)ytPlayer.playVideo()}else if(audio&&audio.paused)playMP3();
removeEventListener('pointerdown',f)});

/* efek riak merah (cairan menyatu / gooey) */
var cv=$('c'),ctx=cv.getContext('2d'),cv2=$('c2'),ctx2=cv2.getContext('2d');
var W,H,dpr,drops=[],ripples=[],tx=null,ty=0,cx=0,cy=0,lastRip=0;
var reds=['244,164,192','232,130,165','255,70,76'];
function size(){dpr=Math.min(devicePixelRatio||1,1.5);W=innerWidth;H=innerHeight;[cv,cv2].forEach(function(c){c.width=W*dpr;c.height=H*dpr});ctx.setTransform(dpr,0,0,dpr,0,0);ctx2.setTransform(dpr,0,0,dpr,0,0)}
size();addEventListener('resize',size);
function drop(x,y,sp,big){var n=big?26:1;
for(var i=0;i<n;i++){var a=Math.random()*6.283,v=big?1+Math.random()*4:Math.random()*.25;
drops.push({x:x,y:y,vx:Math.cos(a)*v,vy:Math.sin(a)*v,r:(big?12:9)+Math.random()*(big?18:9)+Math.min(sp*.12,10),life:1,d:.007+Math.random()*.006,c:reds[(Math.random()*reds.length)|0]})}
if(drops.length>520)drops.splice(0,drops.length-520)}
function ripple(x,y,big){ripples.push({x:x,y:y,r:4,max:big?160:70,life:1});if(ripples.length>14)ripples.shift()}
addEventListener('pointermove',function(e){if(tx===null){cx=e.clientX;cy=e.clientY}tx=e.clientX;ty=e.clientY},{passive:true});
document.addEventListener('pointerleave',function(){tx=null});
addEventListener('pointerdown',function(e){if(!reduce){drop(e.clientX,e.clientY,0,true);ripple(e.clientX,e.clientY,true)}});
function frame(t){
if(tx!==null){var nx=tx,ny=ty,dx=nx-cx,dy=ny-cy,d=Math.hypot(dx,dy);
if(!reduce&&d>.25){var s=Math.min(30,Math.max(1,Math.ceil(d/4)));for(var k=1;k<=s;k++)drop(cx+dx*k/s,cy+dy*k/s,d,false);
if(t-lastRip>170&&d>1.5){lastRip=t;ripple(nx,ny,false)}}
cx=nx;cy=ny}
ctx.clearRect(0,0,W,H);ctx2.clearRect(0,0,W,H);
for(var i=drops.length-1;i>=0;i--){var p=drops[i];p.x+=p.vx;p.y+=p.vy;p.vx*=.95;p.vy=p.vy*.95+.008;p.life-=p.d;
if(p.life<=0){drops.splice(i,1);continue}
ctx.fillStyle='rgba('+p.c+','+Math.min(1,p.life*1.15)+')';ctx.beginPath();ctx.arc(p.x,p.y,p.r*(.35+.65*p.life),0,6.283);ctx.fill()}
ctx2.lineWidth=1.5;
for(var j=ripples.length-1;j>=0;j--){var q=ripples[j];q.r+=(q.max-q.r)*.05+.6;q.life=1-q.r/q.max;
if(q.life<=0){ripples.splice(j,1);continue}
ctx2.strokeStyle='rgba(251,199,220,'+(.35*q.life)+')';ctx2.beginPath();ctx2.arc(q.x,q.y,q.r,0,6.283);ctx2.stroke()}
requestAnimationFrame(frame)}
requestAnimationFrame(frame);
})();
</script>
</body>
</html>
