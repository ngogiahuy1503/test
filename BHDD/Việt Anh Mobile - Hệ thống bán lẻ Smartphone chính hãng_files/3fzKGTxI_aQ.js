/*!CK:4074957728!*//*1446149160,*/

if (self.CavalryLogger) { CavalryLogger.start_js(["eNbsO"]); }

__d("NavigationMetricsEnumJS",[],function a(b,c,d,e,f,g){c.__markCompiled&&c.__markCompiled();f.exports={NAVIGATION_START:"navigationStart",UNLOAD_EVENT_START:"unloadEventStart",UNLOAD_EVENT_END:"unloadEventEnd",REDIRECT_START:"redirectStart",REDIRECT_END:"redirectEnd",FETCH_START:"fetchStart",DOMAIN_LOOKUP_START:"domainLookupStart",DOMAIN_LOOKUP_END:"domainLookupEnd",CONNECT_START:"connectStart",CONNECT_END:"connectEnd",SECURE_CONNECTION_START:"secureConnectionStart",REQUEST_START:"requestStart",RESPONSE_START:"responseStart",RESPONSE_END:"responseEnd",DOM_LOADING:"domLoading",DOM_INTERACTIVE:"domInteractive",DOM_CONTENT_LOADED_EVENT_START:"domContentLoadedEventStart",DOM_CONTENT_LOADED_EVENT_END:"domContentLoadedEventEnd",DOM_COMPLETE:"domComplete",LOAD_EVENT_START:"loadEventStart",LOAD_EVENT_END:"loadEventEnd"};},null,{});
__d("PagePluginActions",[],function a(b,c,d,e,f,g){c.__markCompiled&&c.__markCompiled();f.exports={PAGE_AVATAR:"page_avatar",PAGE_CTA:"page_cta",PAGE_LIKE:"page_like",PAGE_PERMALINK:"page_permalink",PAGE_SHARE:"page_share",PAGE_UNLIKE:"page_unlike"};},null,{});
__d("PagePluginActionTypes",[],function a(b,c,d,e,f,g){c.__markCompiled&&c.__markCompiled();f.exports={CLICK:"click"};},null,{});
__d("PerfXClientMetricsConfig",[],function a(b,c,d,e,f,g){c.__markCompiled&&c.__markCompiled();f.exports={LOGGER_CONFIG:"PerfXClientMetricsLoggerConfig"};},null,{});
__d("PixelRatioConst",[],function a(b,c,d,e,f,g){c.__markCompiled&&c.__markCompiled();f.exports={cookieName:"dpr"};},null,{});
__d("ResourceTimingMetricsEnumJS",[],function a(b,c,d,e,f,g){c.__markCompiled&&c.__markCompiled();f.exports={START_TIME:"startTime",REDIRECT_START:"redirectStart",REDIRECT_END:"redirectEnd",FETCH_START:"fetchStart",DOMAIN_LOOKUP_START:"domainLookupStart",DOMAIN_LOOKUP_END:"domainLookupEnd",CONNECT_START:"connectStart",SECURE_CONNECTION_START:"secureConnectionStart",CONNECT_END:"connectEnd",REQUEST_START:"requestStart",RESPONSE_START:"responseStart",RESPONSE_END:"responseEnd"};},null,{});
__d('clearImmediatePolyfill',['ImmediateImplementation'],function a(b,c,d,e,f,g){if(c.__markCompiled)c.__markCompiled();f.exports=b.clearImmediate||c('ImmediateImplementation').clearImmediate;},null);
__d('sourceMetaToString',[],function a(b,c,d,e,f,g){if(c.__markCompiled)c.__markCompiled();function h(i,j){var k;if(i.name){k=i.name;if(i.module)k=i.module+'.'+k;}else if(i.module)k=i.module+'.<anonymous>';if(j&&i.line){k=(k?k:'<anonymous>')+':'+i.line;if(i.column)k+=':'+i.column;}return k;}f.exports=h;},null);
__d('clearImmediate',['TimerStorage','clearImmediatePolyfill'],function a(b,c,d,e,f,g,h,i){if(c.__markCompiled)c.__markCompiled();f.exports=function(){for(var j=arguments.length,k=Array(j),l=0;l<j;l++)k[l]=arguments[l];h.unset(h.IMMEDIATE,k[0]);return Function.prototype.apply.call(i,b,k);};},null);
__d('PerfXFlusher',['BanzaiLogger','PerfXClientMetricsConfig','invariant'],function a(b,c,d,e,f,g,h,i,j){if(c.__markCompiled)c.__markCompiled();var k=i.LOGGER_CONFIG,l=['perfx_page','perfx_page_type','tti','e2e'];function m(o){l.forEach(function(p){!(p in o)?j(0):undefined;});}var n={flush:function(o,p){m(p);p.lid=o;if(p.fbtrace_id){h.log(k,p,{delay:10*1000});}else h.log(k,p);}};f.exports=n;},null);
__d('legacy:onload-action',['PageHooks'],function a(b,c,d,e,f,g,h){if(c.__markCompiled)c.__markCompiled();b._domreadyHook=h._domreadyHook;b._onloadHook=h._onloadHook;b.runHook=h.runHook;b.runHooks=h.runHooks;b.keep_window_set_as_loaded=h.keepWindowSetAsLoaded;},3);
__d('ClickRefUtils',[],function a(b,c,d,e,f,g){if(c.__markCompiled)c.__markCompiled();var h={get_intern_ref:function(i){if(!!i){var j={profile_minifeed:1,gb_content_and_toolbar:1,gb_muffin_area:1,ego:1,bookmarks_menu:1,jewelBoxNotif:1,jewelNotif:1,BeeperBox:1,searchBarClickRef:1};for(var k=i;k&&k!=document.body;k=k.parentNode){if(!k.id||typeof k.id!=='string')continue;if(k.id.substr(0,8)=='pagelet_')return k.id.substr(8);if(k.id.substr(0,8)=='box_app_')return k.id;if(j[k.id])return k.id;}}return '-';},get_href:function(i){var j=i.getAttribute&&(i.getAttribute('ajaxify')||i.getAttribute('data-endpoint'))||i.action||i.href||i.name;return typeof j==='string'?j:null;},should_report:function(i,j){if(j=='FORCE')return true;if(j=='INDIRECT')return false;return i&&(h.get_href(i)||i.getAttribute&&i.getAttribute('data-ft'));}};f.exports=h;},null);
__d("setUECookie",["Env"],function a(b,c,d,e,f,g,h){if(c.__markCompiled)c.__markCompiled();function i(j){if(!h.no_cookies)document.cookie="act="+encodeURIComponent(j)+"; path=/; domain="+window.location.hostname.replace(/^.*(\.facebook\..*)$/i,'$1');}f.exports=i;},null);
__d('ClickRefLogger',['Arbiter','Banzai','ClickRefUtils','Env','ScriptPath','SessionName','Vector','$','collectDataAttributes','ge','pageID','setUECookie'],function a(b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s){if(c.__markCompiled)c.__markCompiled();var t={delay:0,retry:true};function u(y){if(!q('content'))return [0,0,0,0];var z=o('content'),aa=n.getEventPosition(y);return [aa.x,aa.y,z.offsetLeft,z.clientWidth];}function v(y,z,event,aa){var ba='r',ca=[0,0,0,0],da,ea;if(!!event){da=event.type;if(da=='click'&&q('content'))ca=u(event);var fa=0;event.ctrlKey&&(fa+=1);event.shiftKey&&(fa+=2);event.altKey&&(fa+=4);event.metaKey&&(fa+=8);if(fa)da+=fa;}if(!!z)ea=j.get_href(z);var ga=p(!!event?event.target||event.srcElement:z,['ft','gt']);Object.assign(ga.ft,aa.ft);Object.assign(ga.gt,aa.gt);if(typeof ga.ft.ei==='string')delete ga.ft.ei;var ha=[y._ue_ts,y._ue_count,ea||'-',y._context,da||'-',j.get_intern_ref(z),ba,b.URI?b.URI.getRequestURI(true,true).getUnqualifiedURI().toString():location.pathname+location.search+location.hash,ga].concat(ca).concat(r).concat(l.getScriptPath());return ha;}h.subscribe("ClickRefAction/new",function(y,z){if(j.should_report(z.node,z.mode)){var aa=v(z.cfa,z.node,z.event,z.extra_data);s(z.cfa.ue);var ba=[m.getName(),Date.now(),'act'];i.post('click_ref_logger',Array.prototype.concat(ba,aa),t);}});function w(y){function z(ha){var ia='';for(var ja=0;ja<ha.length;ja++)ia+=String.fromCharCode(1^ha.charCodeAt(ja));return ia;}function aa(ha,ia,ja,ka){var la=ia[ja];if(la&&ha&&la in ha)if(ja+1<ia.length){aa(ha[la],ia,ja+1,ka);}else{var ma=ha[la],na=function(){setTimeout(ka.bind(null,arguments));return ma.apply(this,arguments);};na.toString=ma.toString.bind(ma);Object.defineProperty(ha,la,{configurable:false,writable:true,value:na});}}var ba={},ca={},da=false;function ea(ha,ia){if(ca[ha])return;ca[ha]=ba[ha]=1;}var fa=y[z('jiri')];if(fa){var ga=[];z(fa).split(',').map(function(ha,ia){var ja=ha.substring(1).split(':'),ka;switch(ha.charAt(0)){case '1':ka=new RegExp('\\b('+ja[0]+')\\b','i');ga.push(function(la){var ma=ka.exec(Object.keys(window));if(ma)ea(ia,''+ma);});break;case '2':ka=new RegExp(ja[0]);aa(window,ja,2,function(la){var ma=la[ja[1]];if(typeof ma==='string'&&ka.test(ma))ea(ia,ha);});break;case '3':aa(window,ja,0,function(){for(var la=ga.length;la--;)ga[la]();var ma=Object.keys(ba);if(ma.length){ba={};setTimeout(i[z('qnru')].bind(i,z('islg'),{m:''+ma}),5000);}});break;case '4':da=true;break;}});}}try{w(k);}catch(x){}},null);
__d('PixelRatio',['Arbiter','Cookie','PixelRatioConst','Run'],function a(b,c,d,e,f,g,h,i,j,k){if(c.__markCompiled)c.__markCompiled();var l=j.cookieName,m,n;function o(){return window.devicePixelRatio||1;}function p(){i.set(l,o());}function q(){i.clear(l);}function r(){var t=o();if(t!==m){p();}else q();}var s={startDetecting:function(t){m=t||1;q();if(n)return;n=[h.subscribe('pre_page_transition',r)];k.onBeforeUnload(r);}};f.exports=s;},null);
__d('UserActionHistory',['Arbiter','ClickRefUtils','ScriptPath','throttle','WebStorage'],function a(b,c,d,e,f,g,h,i,j,k,l){if(c.__markCompiled)c.__markCompiled();var m={click:1,submit:1},n=false,o={log:[],len:0},p=k.acrossTransitions(function(){try{n._ua_log=JSON.stringify(o);}catch(s){n=false;}},1000);function q(){var s=l.getSessionStorage();if(s){n=s;n._ua_log&&(o=JSON.parse(n._ua_log));}else n=false;o.log[o.len%10]={ts:Date.now(),path:'-',index:o.len,type:'init',iref:'-'};o.len++;h.subscribe("UserAction/new",function(t,u){var v=u.ua,w=u.node,event=u.event;if(!event||!(event.type in m))return;var x={path:j.getScriptPath(),type:event.type,ts:v._ue_ts,iref:i.get_intern_ref(w)||'-',index:o.len};o.log[o.len++%10]=x;n&&p();});}function r(){return o.log.sort(function(s,t){return t.ts!=s.ts?t.ts-s.ts:t.index-s.index;});}q();f.exports={getHistory:r};},null);
__d('ImageTimingHelper',['Arbiter','BigPipe','URI'],function a(b,c,d,e,f,g,h,i,j){if(c.__markCompiled)c.__markCompiled();var k={},l={};h.subscribe(i.Events.init,function(m,n){if(n.lid&&n.lid!=='0')n.arbiter.subscribe('images_displayed',function(o,p){var q=k[p.lid];if(!q)q=k[p.lid]=[];p.images.forEach(function(r){var s=new j(r);r=s.setFragment('').toString();if(l[r])return;l[r]=true;q.push({pagelet:p.pagelet,timeslice:p.timeslice,ts:p.ts,uri:r});});});});f.exports.getImageTimings=function(m){return k[m]||[];};},null);
__d('NavigationTimingHelper',['NavigationMetricsEnumJS','forEachObject','performance'],function a(b,c,d,e,f,g,h,i,j){if(c.__markCompiled)c.__markCompiled();function k(m,n){var o={};i(h,function(p){var q=n[p];if(q)o[p]=q+m;});return o;}var l={getAsyncRequestTimings:function(m){if(!m||!j.timing||!j.getEntriesByName)return undefined;var n=j.getEntriesByName(m);if(n.length===0)return undefined;return k(j.timing.navigationStart,n[0]);},getNavTimings:function(){if(!j.timing)return undefined;return k(0,j.timing);}};f.exports=l;},null);
__d('PageletEventsHelper',['Arbiter','PageletEventConstsJS'],function a(b,c,d,e,f,g,h,i){if(c.__markCompiled)c.__markCompiled();var j='BigPipe/init',k='pagelet_event',l='phase_begin',m={},n=false;function o(){return {pagelets:{},categories:{},phase_start:{}};}function p(s,t,u,v){if(m[v].pagelets[t]==undefined)m[v].pagelets[t]={};m[v].pagelets[t][s]=u;}function q(s){s.subscribe(k,function(event,t){var u=t.lid;p(t.event,t.id,t.ts,u);if(t.event===i.ARRIVE_END)m[u].pagelets[t.id].phase=t.phase;if((t.event===i.ONLOAD_END||t.event===i.DISPLAY_END)&&t.categories)t.categories.forEach(function(v){if(m[u].categories[v]==undefined)m[u].categories[v]={};m[u].categories[v][t.event]=t.ts;});});s.subscribe(l,function(event,t){m[t.lid].phase_start[t.phase]=t.ts;});}var r={init:function(){if(n)return;h.subscribe(j,function(event,s){m[s.lid]=o();q(s.arbiter);});n=true;},getMetrics:function(s){return m[s];}};f.exports=r;},null);
__d('ResourceTimingBootloaderHelper',['BigPipeExperiments','Bootloader','ResourceTimingMetricsEnumJS','ImageTimingHelper','Set','URI','forEachObject','isEmpty','performance'],function a(b,c,d,e,f,g,h,i,j,k,l,m,n,o,p){if(c.__markCompiled)c.__markCompiled();var q={},r={};function s(w,x,y){if(!p.timing||!p.getEntriesByType)return;var z={};if(h.link_images_to_pagelets)z=k.getImageTimings(y).sort(function(qa,ra){return qa.ts-ra.ts;}).reduce(function(qa,ra){if(qa[ra.uri])return qa;qa[ra.uri]=ra.pagelet;return qa;},{});var aa=p.getEntriesByType('resource'),ba=0,ca=0;for(var da=0;da<aa.length;da++){var ea=aa[da];if(ea.duration<=0||aa.startTime<x)continue;var fa='',ga='',ha='',ia='',ja='',ka=ea.initiatorType;switch(ka){case 'css':case 'link':case 'script':var la=u(ea.name);ga=la[0];fa=la[1];if(!ga||!fa)continue;if(fa==='css'||fa==='js'){ia=fa;var ma=r[ea.name]||ca++;ha=ma+'_'+ga;}else{var na=t(ea.name);ja=na[0];ia=na[1];ha=ba+++'_'+ja;}break;case 'img':var oa=t(ea.name);ja=oa[0];ia=oa[1];ha=ba+++'_'+ja;break;default:continue;}if(w[ea.name]==undefined)w[ea.name]=[];var pa={};n(j,function(qa){var ra=ea[qa];if(ra)pa[qa]=ra+p.timing.navigationStart;});pa.type=ia;pa.desc=ha;if(ia=='img'&&z.hasOwnProperty(ea.name))pa.pagelet=z[ea.name];w[ea.name].push(pa);}}function t(w){var x=new m(w).getDomain();return [x,'img'];}function u(w){var x=w.match(/\/rsrc\.php\/.*\/([^\?]+)/);if(!x)return [];var y=x[1],z='',aa=y.match(/\.(\w+)$/);if(aa)z=aa[1];return [y,z];}var v={addBootloaderMetricsToResourceTimings:function(){var w=arguments.length<=0||arguments[0]===undefined?{}:arguments[0],x=arguments.length<=1||arguments[1]===undefined?{}:arguments[1],y=arguments.length<=2||arguments[2]===undefined?true:arguments[2];if(o(r))r=i.getURLToHashMap();var z={};n(r,function(ca,da){z[ca]=da;});var aa=new l(['bootload','js_exec','start_bootload','tag_bootload']),ba=[];n(x,function(ca,da){var ea=da.indexOf('/');if(ea===-1)return;var fa=da.substring(0,ea);if(!aa.has(fa))return;ba.push(da);var ga=da.substring(ea+1),ha=z[ga];if(!ha)return;if(w[ha]==null)w[ha]=[{}];w[ha].forEach(function(ia){ia.bootloader_hash=ga;ia[fa]=ca;});});if(!y)ba.forEach(function(ca){delete x[ca];});return w;},getLastTTIAndE2EImageResponseEnds:function(w,x,y){var z={TTI:w,E2E:x};if(!p.timing)return z;var aa=y.filter(function(da){return da.ts<=w;}).map(function(da){return da.uri;}).reduce(function(da,ea){da[ea]=true;return da;},{}),ba=y.map(function(da){return da.uri;}).reduce(function(da,ea){da[ea]=true;return da;},{});for(var ca in q)q[ca].forEach(function(da){if(da.type==='img'){if(aa[ca])z.TTI=Math.max(z.TTI,da.responseEnd);if(ba[ca])z.E2E=Math.max(z.E2E,da.responseEnd);}});return z;},getMetrics:function(w,x){q={};if(o(r))r=i.getURLToHashMap();s(q,w,x);return q;}};f.exports=v;},null);
__d('TimeSliceHelper',['LogBuffer','sourceMetaToString'],function a(b,c,d,e,f,g,h,i){if(c.__markCompiled)c.__markCompiled();var j={getMetrics:function(k,l,m,n){var o=h.read('time_slice'),p,q=[],r=function(s){var t;if(s.guard){var u=i(s),v=s.guard.toString();t=u?v+' at '+u:v;}else t='JS['+s.count+']';q.push({begin:s.begin,end:s.end,name:t});};o.forEach(function(s){if(k&&s.end<k||l&&s.begin>l)return;if(s.end-s.begin<m){if(p&&s.begin-p.end<n){p.end=s.end;p.count++;}else{if(p)r(p.count==1?p.first:p);p={begin:s.begin,end:s.end,count:1,first:s,guard:false};}}else r(s);});if(p)r(p.count==1?p.first:p);return q;}};f.exports=j;},null);
__d('PerfXLogger',['Arbiter','LogBuffer','PageEvents','PerfXFlusher','NavigationMetrics','performance'],function a(b,c,d,e,f,g,h,i,j,k,l,m){if(c.__markCompiled)c.__markCompiled();var n={},o='BigPipe/init',p='tti_bigpipe',q={},r,s={_listenersSetUp:false,_setupListeners:function(){if(this.listenersSetUp)return;this._subscribeToBigPipeInit(h);this._subscribeToFullPageE2E(h);this._subscribeToNavigationDoneEvent();this.listenersSetUp=true;},_init:function(t,u,v){n[t]={perfx_page:u,perfx_page_type:v};this._setupListeners();},initForPageLoad:function(t,u,v){r=t;this._init(t,u,v);},initForQuickling:function(t,u,v,w){this._init(t,u,v);q[t]=w;},updateProperties:function(t,u,v){var w=n[t];if(w){w.perfx_page=u;w.perfx_page_type=v;}},_subscribeToNavigationDoneEvent:function(){l.addListener(l.Events.NAVIGATION_DONE,(function(t,u){var v=u.serverLID;if(!(v in n))return;n[v].navigation_done_tti=u.tti;n[v].navigation_done_e2e=u.e2e;var w=u.pageType;if(this._validateValues(v))if(w==='normal'){this._finishPageload(v);}else if(w==='quickling')this._finishQuickling(v);}).bind(this));},_subscribeToBigPipeInit:function(t){t.subscribe(o,(function(event,u){var v=u.arbiter;this._subscribeToTTI(v);this._subscribeToAsyncTransitionE2E(v);}).bind(this));},_subscribeToTTI:function(t){t.subscribe(p,function(event,u){var v=u.lid;if(!(v in n))return;n[v].tti=u.ts;});},_subscribeToFullPageE2E:function(t){t.subscribe(j.BIGPIPE_ONLOAD,(function(event,u){if(!(r in n))return;n[r].e2e=u.ts;if(this._validateValues(r))this._finishPageload(r);}).bind(this));},_subscribeToAsyncTransitionE2E:function(t){t.subscribe(j.AJAXPIPE_ONLOAD,(function(event,u){var v=u.lid;if(!(v in n))return;n[v].e2e=u.ts;if(this._validateValues(v))this._finishQuickling(v);}).bind(this));},_generatePayload:function(t,u){var v=n[t];if(v.fbtrace_id){v.js_tti=this._getJSTime(u,v.tti);v.js_e2e=this._getJSTime(u,v.e2e);}var w=Object.assign({},v);this._adjustValues(w,u);return w;},_getPageloadPayload:function(t){if(!(t in n))return;if(!m.timing){delete n[t];return;}var u=m.timing.navigationStart;return this._generatePayload(t,u);},_getQuicklingPayload:function(t){if(!(t in q)||!(t in n))return;if(!m.timing||!m.getEntriesByName){delete q[t];delete n[t];return;}var u=q[t],v=m.getEntriesByName(u);if(v.length===0)return;var w=v[0],x=m.timing.navigationStart+w.startTime;return this._generatePayload(t,x);},_finishPageload:function(t){var u=this._getPageloadPayload(t);if(u)this._log(t,u);},_finishQuickling:function(t){var u=this._getQuicklingPayload(t);if(u)this._log(t,u);},_log:function(t,u){k.flush(t,u);},_adjustValues:function(t,u){var v=['e2e','tti','navigation_done_e2e','navigation_done_tti'];for(var w=0;w<v.length;w++){var x=v[w],y=t[x];t[x]=y-u;}},_validateValues:function(t){if(!(t in n))return false;var u=n[t],v=['e2e','tti','navigation_done_e2e','navigation_done_tti'];for(var w=0;w<v.length;w++){var x=v[w];if(!u[x])return false;}return true;},getPayload:function(t){if(!(t in n))return;var u=n[t].perfx_page_type;if(u==="normal"){return this._getPageloadPayload(t);}else if(u==="quickling")return this._getQuicklingPayload(t);},setFBTraceID:function(t,u){if(t in n)n[t].fbtrace_id=u;},_getJSTime:function(t,u){if(t>u)return 0;var v=0;i.read('time_slice').forEach(function(w){var x=w.begin,y=w.end;if(x>y)return;if(t<=x&&y<=u){v+=y-x;}else if(x<=t&&u<=y){v+=u-t;}else if(x<=t&&t<=y){v+=y-t;}else if(x<=u&&u<=y)v+=u-x;});return v;}};f.exports=s;},null);
__d('PluginCSSReflowHack',['Style'],function a(b,c,d,e,f,g,h){if(c.__markCompiled)c.__markCompiled();var i={trigger:function(j){setTimeout(function(){var k='border-bottom-width',l=h.get(j,k);h.set(j,k,parseInt(l,10)+1+'px');var m=j.offsetHeight;h.set(j,k,l);return m;},1000);}};f.exports=i;},null);
__d('PluginPageActionLogger',['BanzaiLogger','DOM','Event','PagePluginActions','PagePluginActionTypes'],function a(b,c,d,e,f,g,h,i,j,k,l){if(c.__markCompiled)c.__markCompiled();var m={initializeClickLoggers:function(n,o,p,q,r,s,t,u,v,w){var x=function(y,z){try{var ba=i.find(q,'.'+y);j.listen(ba,'click',function(ca){h.log('PagePluginActionsLoggerConfig',{page_id:o,page_plugin_action:z,page_plugin_action_type:l.CLICK,referer_url:p,is_sdk:n});});}catch(aa){}};x(r,k.PAGE_LIKE);x(s,k.PAGE_UNLIKE);x(t,k.PAGE_AVATAR);x(u,k.PAGE_PERMALINK);x(v,k.PAGE_SHARE);x(w,k.PAGE_CTA);}};f.exports=m;},null);
__d('KappaWrapper',['AsyncSignal','setTimeoutAcrossTransitions'],function a(b,c,d,e,f,g,h,i){if(c.__markCompiled)c.__markCompiled();var j=false;f.exports={forceStart:function(k,l,m){var n=0,o=function(){new h('/si/kappa/',{Ko:"a"}).send();if(++n<k)i(o,l*1000);};i(o,(l+m)*1000);},start:function(k,l,m){if(!j){j=true;this.forceStart(k,l,m);}}};},null);
__d('Chromedome',['fbt'],function a(b,c,d,e,f,g,h){if(c.__markCompiled)c.__markCompiled();g.start=function(i){if(i.off||top!==window||!/(^|\.)facebook\.(com|sg)$/.test(document.domain))return;var j=i.stop||h._("D\u1eebng l\u1ea1i!"),k=i.text||h._("\u0110\u00e2y l\u00e0 m\u1ed9t t\u00ednh n\u0103ng c\u1ee7a tr\u00ecnh duy\u1ec7t d\u00e0nh cho c\u00e1c nh\u00e0 ph\u00e1t tri\u1ec3n. N\u1ebfu ai \u0111\u00f3 b\u1ea3o b\u1ea1n sao ch\u00e9p-d\u00e1n n\u1ed9i dung n\u00e0o \u0111\u00f3 v\u00e0o \u0111\u00e2y \u0111\u1ec3 b\u1eadt m\u1ed9t t\u00ednh n\u0103ng c\u1ee7a Facebook ho\u1eb7c \"hack\" t\u00e0i kho\u1ea3n c\u1ee7a ng\u01b0\u1eddi kh\u00e1c, th\u00ec \u0111\u00f3 l\u00e0 h\u00e0nh vi l\u1eeba \u0111\u1ea3o v\u00e0 s\u1ebd khi\u1ebfn h\u1ecd c\u00f3 th\u1ec3 truy c\u1eadp v\u00e0o t\u00e0i kho\u1ea3n Facebook c\u1ee7a b\u1ea1n."),l=i.more||h._("\u0110\u1ec3 bi\u1ebft th\u00eam th\u00f4ng tin, h\u00e3y xem {url}.",[h.param('url','https://www.facebook.com/selfxss')]);if((window.chrome||window.safari)&&!i.textonly){var m='font-family:helvetica; font-size:20px; ';[[j,i.c1||m+'font-size:50px; font-weight:bold; '+'color:red; -webkit-text-stroke:1px black;'],[k,i.c2||m],[l,i.c3||m],['','']].map(function(s){setTimeout(console.log.bind(console,'\n%c'+s[0],s[1]));});}else{var n=['',' .d8888b.  888                       888','d88P  Y88b 888                       888','Y88b.      888                       888',' "Y888b.   888888  .d88b.  88888b.   888','    "Y88b. 888    d88""88b 888 "88b  888','      "888 888    888  888 888  888  Y8P','Y88b  d88P Y88b.  Y88..88P 888 d88P',' "Y8888P"   "Y888  "Y88P"  88888P"   888','                           888','                           888','                           888'],o=(''+k).match(/.{35}.+?\s+|.+$/g),p=Math.floor(Math.max(0,(n.length-o.length)/2));for(var q=0;q<n.length||q<o.length;q++){var r=n[q];n[q]=r+new Array(45-r.length).join(' ')+(o[q-p]||'');}console.log('\n\n\n'+n.join('\n')+'\n\n'+l+'\n');return;}};},null);