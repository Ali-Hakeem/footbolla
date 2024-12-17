@extends('layouts.layouts')

@section('content')
<section class="m-t">
    <div class="container py-5 col-xxl-6">
        <div class="player-data m-2">
            <h2 class="text-center text-uppercase"><b><i>Table <span class="text-warning">League </span></i></b></h2>
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#home"><img alt="Flag of Denmark" class="flag" height="15" src="https://flagicons.lipis.dev/flags/4x3/gb-eng.svg" width="20"/></a></li>
              <li><a data-toggle="tab" href="#menu1"><img alt="Flag of Denmark" class="flag" height="15" src="https://flagicons.lipis.dev/flags/4x3/es.svg" width="20"/></a></li>
              <li><a data-toggle="tab" href="#menu2"><img alt="Flag of Denmark" class="flag" height="15" src="https://flagicons.lipis.dev/flags/4x3/it.svg" width="20"/></a></li>
              <li><a data-toggle="tab" href="#menu3"><img alt="Flag of Denmark" class="flag" height="15" src="https://flagicons.lipis.dev/flags/4x3/de.svg" width="20"/></a></li>
              <li><a data-toggle="tab" href="#menu4"><img alt="Flag of Denmark" class="flag" height="15" src="https://flagicons.lipis.dev/flags/4x3/nl.svg" width="20"/></a></li>
              <li><a data-toggle="tab" href="#menu5"><img alt="Flag of Denmark" class="flag" height="15" src="https://flagicons.lipis.dev/flags/4x3/fr.svg" width="20"/></a></li>
              <li><a data-toggle="tab" href="#menu6"><img alt="Flag of Denmark" class="flag" height="15" src="https://flagicons.lipis.dev/flags/4x3/pt.svg" width="20"/></a></li>
            </ul>
          
            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <h3><img alt="Flag of Denmark" class="flag" height="15" src="https://flagicons.lipis.dev/flags/4x3/gb-eng.svg" width="20"/> Premier League</h3>
                <p><div id="scoreaxis-widget-93f4e" style="border-width:1px;border-color:rgba(0, 0, 0, 0.15);border-style:solid;border-radius:8px;padding:10px;background:rgb(255, 255, 255);width:100%"><iframe id="Iframe" src="https://www.scoreaxis.com/widget/standings-widget/8?autoHeight=1&amp;inst=93f4e" style="width:100%;border:none;transition:all 300ms ease"></iframe><script>window.addEventListener("DOMContentLoaded",event=>{window.addEventListener("message",event=>{if(event.data.appHeight&&"93f4e"==event.data.inst){let container=document.querySelector("#scoreaxis-widget-93f4e iframe");container&&(container.style.height=parseInt(event.data.appHeight)+"px")}},!1)});</script></div><div style="font-size: 12px; font-family: Arial, sans-serif; text-align: left;">Data provided by <a target="_blank" href="https://www.scoreaxis.com/">Scoreaxis</a></div></p>
              </div>
              <div id="menu1" class="tab-pane fade">
                <h3><img alt="Flag of Denmark" class="flag" height="15" src="https://flagicons.lipis.dev/flags/4x3/es.svg" width="20"/> La Liga</h3>
                <p><div id="scoreaxis-widget-4d9b7" style="border-width:1px;border-color:rgba(0, 0, 0, 0.15);border-style:solid;border-radius:8px;padding:10px;background:rgb(255, 255, 255);width:100%"><iframe id="Iframe" src="https://www.scoreaxis.com/widget/standings-widget/564?autoHeight=1&amp;groupNum=undefined&amp;inst=4d9b7" style="width:100%;border:none;transition:all 300ms ease"></iframe><script>window.addEventListener("DOMContentLoaded",event=>{window.addEventListener("message",event=>{if(event.data.appHeight&&"4d9b7"==event.data.inst){let container=document.querySelector("#scoreaxis-widget-4d9b7 iframe");container&&(container.style.height=parseInt(event.data.appHeight)+"px")}},!1)});</script></div><div style="font-size: 12px; font-family: Arial, sans-serif; text-align: left;">Data provided by <a target="_blank" href="https://www.scoreaxis.com/">Scoreaxis</a></div></p>
              </div>
              <div id="menu2" class="tab-pane fade">
                <h3><img alt="Flag of Denmark" class="flag" height="15" src="https://flagicons.lipis.dev/flags/4x3/it.svg" width="20"/> Serie A</h3>
                <p><div id="scoreaxis-widget-60a9f" style="border-width:1px;border-color:rgba(0, 0, 0, 0.15);border-style:solid;border-radius:8px;padding:10px;background:rgb(255, 255, 255);width:100%"><iframe id="Iframe" src="https://www.scoreaxis.com/widget/standings-widget/384?autoHeight=1&amp;groupNum=undefined&amp;inst=60a9f" style="width:100%;border:none;transition:all 300ms ease"></iframe><script>window.addEventListener("DOMContentLoaded",event=>{window.addEventListener("message",event=>{if(event.data.appHeight&&"60a9f"==event.data.inst){let container=document.querySelector("#scoreaxis-widget-60a9f iframe");container&&(container.style.height=parseInt(event.data.appHeight)+"px")}},!1)});</script></div><div style="font-size: 12px; font-family: Arial, sans-serif; text-align: left;">Data provided by <a target="_blank" href="https://www.scoreaxis.com/">Scoreaxis</a></div></p>
              </div>
              <div id="menu3" class="tab-pane fade">
                <h3><img alt="Flag of Denmark" class="flag" height="15" src="https://flagicons.lipis.dev/flags/4x3/de.svg" width="20"/> Bundesliga</h3>
                <p><div id="scoreaxis-widget-752a2" style="border-width:1px;border-color:rgba(0, 0, 0, 0.15);border-style:solid;border-radius:8px;padding:10px;background:rgb(255, 255, 255);width:100%"><iframe id="Iframe" src="https://www.scoreaxis.com/widget/standings-widget/82?autoHeight=1&amp;groupNum=undefined&amp;inst=752a2" style="width:100%;border:none;transition:all 300ms ease"></iframe><script>window.addEventListener("DOMContentLoaded",event=>{window.addEventListener("message",event=>{if(event.data.appHeight&&"752a2"==event.data.inst){let container=document.querySelector("#scoreaxis-widget-752a2 iframe");container&&(container.style.height=parseInt(event.data.appHeight)+"px")}},!1)});</script></div><div style="font-size: 12px; font-family: Arial, sans-serif; text-align: left;">Data provided by <a target="_blank" href="https://www.scoreaxis.com/">Scoreaxis</a></div></p>
              </div>
              <div id="menu4" class="tab-pane fade">
                <h3><img alt="Flag of Denmark" class="flag" height="15" src="https://flagicons.lipis.dev/flags/4x3/nl.svg" width="20"/> Eredivisie</h3>
                <p><div id="scoreaxis-widget-695f0" style="border-width:1px;border-color:rgba(0, 0, 0, 0.15);border-style:solid;border-radius:8px;padding:10px;background:rgb(255, 255, 255);width:100%"><iframe id="Iframe" src="https://www.scoreaxis.com/widget/standings-widget/72?autoHeight=1&amp;groupNum=undefined&amp;inst=695f0" style="width:100%;border:none;transition:all 300ms ease"></iframe><script>window.addEventListener("DOMContentLoaded",event=>{window.addEventListener("message",event=>{if(event.data.appHeight&&"695f0"==event.data.inst){let container=document.querySelector("#scoreaxis-widget-695f0 iframe");container&&(container.style.height=parseInt(event.data.appHeight)+"px")}},!1)});</script></div><div style="font-size: 12px; font-family: Arial, sans-serif; text-align: left;">Data provided by <a target="_blank" href="https://www.scoreaxis.com/">Scoreaxis</a></div></p>
              </div>
              <div id="menu5" class="tab-pane fade">
                <h3><img alt="Flag of Denmark" class="flag" height="15" src="https://flagicons.lipis.dev/flags/4x3/fr.svg" width="20"/> Ligue 1</h3>
                <p><div id="scoreaxis-widget-7ffa6" style="border-width:1px;border-color:rgba(0, 0, 0, 0.15);border-style:solid;border-radius:8px;padding:10px;background:rgb(255, 255, 255);width:100%"><iframe id="Iframe" src="https://www.scoreaxis.com/widget/standings-widget/301?autoHeight=1&amp;groupNum=undefined&amp;inst=7ffa6" style="width:100%;border:none;transition:all 300ms ease"></iframe><script>window.addEventListener("DOMContentLoaded",event=>{window.addEventListener("message",event=>{if(event.data.appHeight&&"7ffa6"==event.data.inst){let container=document.querySelector("#scoreaxis-widget-7ffa6 iframe");container&&(container.style.height=parseInt(event.data.appHeight)+"px")}},!1)});</script></div><div style="font-size: 12px; font-family: Arial, sans-serif; text-align: left;">Data provided by <a target="_blank" href="https://www.scoreaxis.com/">Scoreaxis</a></div></p>
              </div>
              <div id="menu6" class="tab-pane fade">
                <h3><img alt="Flag of Denmark" class="flag" height="15" src="https://flagicons.lipis.dev/flags/4x3/pt.svg" width="20"/> Primeira Liga</h3>
                <p><div id="scoreaxis-widget-41ca6" style="border-width:1px;border-color:rgba(0, 0, 0, 0.15);border-style:solid;border-radius:8px;padding:10px;background:rgb(255, 255, 255);width:100%"><iframe id="Iframe" src="https://www.scoreaxis.com/widget/standings-widget/462?autoHeight=1&amp;groupNum=undefined&amp;inst=41ca6" style="width:100%;border:none;transition:all 300ms ease"></iframe><script>window.addEventListener("DOMContentLoaded",event=>{window.addEventListener("message",event=>{if(event.data.appHeight&&"41ca6"==event.data.inst){let container=document.querySelector("#scoreaxis-widget-41ca6 iframe");container&&(container.style.height=parseInt(event.data.appHeight)+"px")}},!1)});</script></div><div style="font-size: 12px; font-family: Arial, sans-serif; text-align: left;">Data provided by <a target="_blank" href="https://www.scoreaxis.com/">Scoreaxis</a></div></p>
              </div>
            </div>
          </div>
</section>
@endsection
