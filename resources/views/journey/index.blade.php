<!doctype html>
{{-- resources/views/journey/index.blade.php — Halaman Journey Kita (halaman sendiri). --}}
{{-- Foto + kesimpulan dari config/birthday.php (journeyPhotos, journeyConclusion). --}}
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<meta name="robots" content="noindex">
<title>{{ $journey['title'] ?? 'Journey Kita' }}</title>
<link rel="icon" type="image/png" href="{{ asset('assets/favicon-heart.png') }}?v={{ filemtime(public_path('assets/favicon-heart.png')) }}">
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}?v={{ filemtime(public_path('favicon.ico')) }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500;1,600&family=Space+Grotesk:wght@400;500;700&display=swap" rel="stylesheet">
<style>
:root{--bg:#050506;--fg:#f2f2f2;--muted:#a9a9b0;--red:#f4a4c0;--red2:#fbc7dc;--line:#33333a}
body{margin:0;background:var(--bg);color:var(--fg);font-family:'Space Grotesk',system-ui,sans-serif}
nav{position:sticky;top:0;z-index:6;display:flex;align-items:center;justify-content:space-between;gap:12px;padding:14px 24px;background:rgba(5,5,6,.6);backdrop-filter:blur(10px)}
.logo{font-family:Impact,sans-serif;font-size:22px;letter-spacing:3px;text-transform:uppercase}
.btn{min-height:44px;padding:0 22px;border-radius:999px;border:1px solid var(--line);background:rgba(20,20,24,.55);color:var(--fg);font:700 14px 'Space Grotesk',sans-serif;letter-spacing:.04em;display:inline-flex;align-items:center;gap:10px;text-decoration:none;cursor:pointer}
.btn.solid{background:var(--red);border-color:var(--red);color:#050506}
.eq{display:inline-flex;gap:2px;align-items:flex-end;height:14px}
.eq b{width:3px;height:4px;background:currentColor;border-radius:2px}
.on .eq b{animation:eq .8s ease-in-out infinite alternate}
.on .eq b:nth-child(2){animation-delay:.2s}.on .eq b:nth-child(3){animation-delay:.4s}
@keyframes eq{to{height:14px}}
.wrap{max-width:1100px;margin:0 auto;padding:40px 24px 120px}
.wrap h1{font-family:Impact,sans-serif;font-weight:400;font-size:clamp(48px,10vw,120px);line-height:1;letter-spacing:2px;text-transform:uppercase;margin:0 0 12px}
.sub{color:var(--muted);margin:0 0 36px;font-size:16px}
/* galeri berjalan */
.gstrip{overflow:hidden;margin-bottom:80px}
.gtrack{display:flex;gap:14px;width:max-content;animation:gscroll 70s linear infinite}
.gstrip:hover .gtrack{animation-play-state:paused}
@keyframes gscroll{to{transform:translateX(-50%)}}
.gtrack button{flex:0 0 180px;padding:0;border:1px solid var(--line);border-radius:16px;overflow:hidden;background:#0c0c0f;cursor:pointer;aspect-ratio:3/4}
.gtrack img{width:100%;height:100%;object-fit:cover;display:block}
.gtrack button:hover img{transform:scale(1.05)}
.gtrack img{transition:transform .3s}
@media (prefers-reduced-motion:reduce){.gtrack{animation:none}}
/* kesimpulan */
.kesimpulan{max-width:800px;margin:0 auto;box-sizing:border-box;text-align:center;padding:40px 36px;border-radius:28px;background:linear-gradient(#0d0d10,#0d0d10) padding-box,conic-gradient(#f4a4c0,#33333a,#fbc7dc,#33333a,#f4a4c0) border-box;border:2px solid transparent}
.kesimpulan h2{font-family:Impact,sans-serif;font-weight:400;font-size:clamp(32px,6vw,56px);letter-spacing:2px;text-transform:uppercase;margin:0 0 16px}
.kesimpulan p{margin:0;color:#c4c4cb;line-height:1.8;font-size:17px;white-space:pre-line}
/* lightbox */
.panel{position:fixed;inset:0;z-index:10;display:none;align-items:center;justify-content:center;padding:24px;background:rgba(5,5,6,.85)}
.panel.open{display:flex}
.fig{display:flex;gap:28px;align-items:center;max-width:min(94vw,920px);text-align:left}
.fig img{max-width:min(52vw,480px);max-height:76vh;border-radius:16px;border:1px solid var(--line)}
.fig p{flex:1;margin:0;color:var(--red2);line-height:1.8;font-size:19px;white-space:pre-line;font-family:'Playfair Display',Georgia,serif;font-style:italic}
@media (max-width:700px){.fig{flex-direction:column;text-align:center}.fig img{max-width:100%}}
.xbtn{position:absolute;top:14px;right:14px}
@media (max-width:700px){nav{padding:12px 14px}.logo{font-size:18px}.gtrack button{flex-basis:140px}}
</style>
</head>
<body>
<nav>
<div class="logo">You and Memories</div>
<div style="display:flex;gap:10px">
<button type="button" class="btn" id="bMusic" aria-pressed="false" title="Putar atau matikan lagu"><span class="eq"><b></b><b></b><b></b></span><span>Musik</span></button>
<a class="btn" href="{{ route('birthday') }}">← Kembali</a>
</div>
</nav>
<main class="wrap">
<h1>You and<br>Memories</h1>
<p class="sub">Remember thiss??</p>
<div class="gstrip"><div class="gtrack">
@for ($r = 0; $r < 2; $r++)
@foreach ($journey['photos'] as $i => $photo)
<button type="button" data-full="{{ $photo['src'] }}" data-desc="{{ $photo['desc'] }}" aria-label="Lihat foto {{ $i + 1 }}" @if ($r === 1) aria-hidden="true" tabindex="-1" @endif><img src="{{ $photo['src'] }}" alt="Momen {{ $i + 1 }}" loading="lazy"></button>
@endforeach
@endfor
</div></div>
<div class="kesimpulan">
<h2>{{ $journey['conclusion']['t'] ?? 'Kesimpulan' }}</h2>
<p>{{ $journey['conclusion']['p'] ?? '' }}</p>
</div>
</main>
<div class="panel" id="pFoto" role="dialog" aria-modal="true" aria-label="Foto">
<button class="btn xbtn" type="button" data-close>Tutup</button>
<figure class="fig"><img id="fotoBesar" src="" alt="Foto journey"><p id="fotoDesc"></p></figure>
</div>
<script>
(function(){
var p=document.getElementById('pFoto'),img=document.getElementById('fotoBesar'),desc=document.getElementById('fotoDesc');
document.querySelectorAll('.gtrack button').forEach(function(b){
b.addEventListener('click',function(){img.src=b.getAttribute('data-full');desc.textContent=b.getAttribute('data-desc');p.classList.add('open')})});
function close(){p.classList.remove('open');img.src='';desc.textContent=''}
p.querySelector('[data-close]').addEventListener('click',close);
p.addEventListener('click',function(e){if(e.target===p)close()});
addEventListener('keydown',function(e){if(e.key==='Escape')close()});
})();
</script>
<script>
/* musik Magnolia (MP3 lokal utama; video YouTube resmi cadangan; perlu 1 interaksi) */
(function(){
var song={{ Js::from($journey['song']) }},ytId={{ Js::from($journey['songYoutubeId']) }};
var songStart={{ Js::from($journey['songStart']) }},songEnd={{ Js::from($journey['songEnd']) }};
var seg=songEnd>songStart;
var bM=document.getElementById('bMusic'),want=true,ytPlayer=null,ytReady=false,ytLoading=false,useYT=false;
var audio=song?new Audio(song):null;
if(audio){audio.loop=!seg;audio.volume=.6;
if(seg){audio.addEventListener('loadedmetadata',function(){try{audio.currentTime=songStart}catch(e){}});
audio.addEventListener('timeupdate',function(){if(audio.currentTime>=songEnd)audio.currentTime=songStart})}}
function setM(on){bM.classList.toggle('on',on);bM.setAttribute('aria-pressed',on?'true':'false')}
function playMP3(){var r=audio.play();if(r&&r.then)r.then(function(){setM(true)}).catch(function(){setM(false)})}
function loadYT(){
if(!ytId||ytPlayer||ytLoading)return;ytLoading=true;
var tag=document.createElement('script');tag.src='https://www.youtube.com/iframe_api';document.head.appendChild(tag);
var box=document.createElement('div');box.style.cssText='position:fixed;width:4px;height:4px;left:-10px;bottom:0;opacity:.01;pointer-events:none';
box.innerHTML='<div id="ytMagnolia"></div>';document.body.appendChild(box);
var iv=setInterval(function(){
if(!(window.YT&&YT.Player))return;clearInterval(iv);
ytPlayer=new YT.Player('ytMagnolia',{videoId:ytId,playerVars:(function(){var pv={loop:1,playlist:ytId};if(songStart>0)pv.start=songStart;if(seg)pv.end=songEnd;return pv})(),
events:{onReady:function(){ytReady=true;if(want)ytPlayer.playVideo()},
onStateChange:function(e){setM(e.data===YT.PlayerState.PLAYING)}}});
},300)}
function play(){
if(useYT){if(ytReady)ytPlayer.playVideo();else loadYT();return}
if(audio)playMP3();else if(ytId){useYT=true;loadYT()}else setM(false)}
if(audio)audio.addEventListener('error',function(){
if(ytId){useYT=true;setM(false);loadYT();bM.title='Memutar dari YouTube: Taylor Swift \u2013 Enchanted'}
else{want=false;setM(false);bM.title='File lagu belum ada'}});
bM.addEventListener('click',function(){
if(useYT){if(ytReady&&ytPlayer.getPlayerState()===YT.PlayerState.PLAYING){want=false;ytPlayer.pauseVideo();setM(false)}else{want=true;play()}return}
if(audio&&!audio.paused){want=false;setM(false);audio.pause()}else{want=true;play()}});
play();
addEventListener('pointerdown',function f(e){
if(!want||bM.contains(e.target))return;
if(useYT){if(ytReady)ytPlayer.playVideo()}else if(audio&&audio.paused)playMP3();
removeEventListener('pointerdown',f)});
})();
</script>
</body>
</html>
