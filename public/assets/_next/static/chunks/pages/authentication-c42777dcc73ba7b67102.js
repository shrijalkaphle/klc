_N_E=(window.webpackJsonp_N_E=window.webpackJsonp_N_E||[]).push([[36],{"20a2":function(e,t,r){e.exports=r("nOHt")},ODXe:function(e,t,r){"use strict";function n(e,t){(null==t||t>e.length)&&(t=e.length);for(var r=0,n=new Array(t);r<t;r++)n[r]=e[r];return n}function o(e,t){return function(e){if(Array.isArray(e))return e}(e)||function(e,t){if("undefined"!==typeof Symbol&&Symbol.iterator in Object(e)){var r=[],n=!0,o=!1,a=void 0;try{for(var c,s=e[Symbol.iterator]();!(n=(c=s.next()).done)&&(r.push(c.value),!t||r.length!==t);n=!0);}catch(i){o=!0,a=i}finally{try{n||null==s.return||s.return()}finally{if(o)throw a}}return r}}(e,t)||function(e,t){if(e){if("string"===typeof e)return n(e,t);var r=Object.prototype.toString.call(e).slice(8,-1);return"Object"===r&&e.constructor&&(r=e.constructor.name),"Map"===r||"Set"===r?Array.from(e):"Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)?n(e,t):void 0}}(e,t)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}r.d(t,"a",(function(){return o}))},SMlj:function(e,t,r){"use strict";r.d(t,"a",(function(){return s})),r.d(t,"c",(function(){return i})),r.d(t,"b",(function(){return l}));var n=r("p46w"),o=r.n(n),a=r("20a2"),c=r.n(a),s=function(e){o.a.set("token",e),c.a.push("/")},i=function(e,t){e.req?(e.res.writeHead(302,{Location:t}),e.res.end()):c.a.push(t)},l=function(){o.a.remove("token"),c.a.push("/")}},YFqc:function(e,t,r){e.exports=r("cTJO")},cTJO:function(e,t,r){"use strict";var n=r("zoAU"),o=r("7KCV");t.__esModule=!0,t.default=void 0;var a=o(r("q1tI")),c=r("elyg"),s=r("nOHt"),i=r("vNVm"),l={};function u(e,t,r,n){if(e&&(0,c.isLocalURL)(t)){e.prefetch(t,r,n).catch((function(e){0}));var o=n&&"undefined"!==typeof n.locale?n.locale:e&&e.locale;l[t+"%"+r+(o?"%"+o:"")]=!0}}var f=function(e){var t=!1!==e.prefetch,r=(0,s.useRouter)(),o=r&&r.pathname||"/",f=a.default.useMemo((function(){var t=(0,c.resolveHref)(o,e.href,!0),r=n(t,2),a=r[0],s=r[1];return{href:a,as:e.as?(0,c.resolveHref)(o,e.as):s||a}}),[o,e.href,e.as]),p=f.href,d=f.as,b=e.children,j=e.replace,m=e.shallow,v=e.scroll,h=e.locale;"string"===typeof b&&(b=a.default.createElement("a",null,b));var O=a.Children.only(b),g=O&&"object"===typeof O&&O.ref,y=(0,i.useIntersection)({rootMargin:"200px"}),w=n(y,2),x=w[0],N=w[1],P=a.default.useCallback((function(e){x(e),g&&("function"===typeof g?g(e):"object"===typeof g&&(g.current=e))}),[g,x]);(0,a.useEffect)((function(){var e=N&&t&&(0,c.isLocalURL)(p),n="undefined"!==typeof h?h:r&&r.locale,o=l[p+"%"+d+(n?"%"+n:"")];e&&!o&&u(r,p,d,{locale:n})}),[d,p,N,h,t,r]);var E={ref:P,onClick:function(e){O.props&&"function"===typeof O.props.onClick&&O.props.onClick(e),e.defaultPrevented||function(e,t,r,n,o,a,s,i){("A"!==e.currentTarget.nodeName||!function(e){var t=e.currentTarget.target;return t&&"_self"!==t||e.metaKey||e.ctrlKey||e.shiftKey||e.altKey||e.nativeEvent&&2===e.nativeEvent.which}(e)&&(0,c.isLocalURL)(r))&&(e.preventDefault(),null==s&&(s=n.indexOf("#")<0),t[o?"replace":"push"](r,n,{shallow:a,locale:i,scroll:s}).then((function(e){e&&s&&document.body.focus()})))}(e,r,p,d,j,m,v,h)},onMouseEnter:function(e){(0,c.isLocalURL)(p)&&(O.props&&"function"===typeof O.props.onMouseEnter&&O.props.onMouseEnter(e),u(r,p,d,{priority:!0}))}};if(e.passHref||"a"===O.type&&!("href"in O.props)){var S="undefined"!==typeof h?h:r&&r.locale,C=(0,c.getDomainLocale)(d,S,r&&r.locales,r&&r.domainLocales);E.href=C||(0,c.addBasePath)((0,c.addLocale)(d,S,r&&r.defaultLocale))}return a.default.cloneElement(O,E)};t.default=f},eGLW:function(e,t,r){(window.__NEXT_P=window.__NEXT_P||[]).push(["/authentication",function(){return r("eShx")}])},eShx:function(e,t,r){"use strict";r.r(t);var n=r("nKUr"),o=r("q1tI"),a=r.n(o),c=r("Ix5F"),s=r("o0o1"),i=r.n(s),l=r("HaE+"),u=r("rePB"),f=r("ODXe"),p=r("aLZG"),d=r("bTjV"),b=r("YFqc"),j=r.n(b),m=r("vDqi"),v=r.n(m),h=r("xUX2"),O=r("rjN7"),g=r("SMlj");function y(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)}return r}function w(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?y(Object(r),!0).forEach((function(t){Object(u.a)(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):y(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}var x={email:"",password:""},N=function(){var e=a.a.useState(x),t=Object(f.a)(e,2),r=t[0],o=t[1],c=a.a.useState(!0),s=Object(f.a)(c,2),b=s[0],m=s[1],y=a.a.useState(!1),N=Object(f.a)(y,2),P=N[0],E=N[1],S=a.a.useState(""),C=Object(f.a)(S,2),k=C[0],D=C[1];a.a.useEffect((function(){var e=Object.values(r).every((function(e){return Boolean(e)}));m(!e)}),[r]);var L=function(e){var t=e.target,r=t.name,n=t.value;o((function(e){return w(w({},e),{},Object(u.a)({},r,n))}))},I=function(){var e=Object(l.a)(i.a.mark((function e(t){var n,o,a;return i.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return t.preventDefault(),e.prev=1,E(!0),D(""),n="".concat(O.a,"/api/v1/auth/signin"),o=w({},r),e.next=8,v.a.post(n,o);case 8:a=e.sent,Object(g.a)(a.data),e.next=15;break;case 12:e.prev=12,e.t0=e.catch(1),Object(h.a)(e.t0,D);case 15:return e.prev=15,E(!1),e.finish(15);case 18:case"end":return e.stop()}}),e,null,[[1,12,15,18]])})));return function(t){return e.apply(this,arguments)}}();return Object(n.jsxs)("div",{className:"login-form",children:[Object(n.jsx)("h2",{children:"Login"}),Object(n.jsx)(p.a,{color:"danger",isOpen:!!k,toggle:function(){return D(!1)},children:k}),Object(n.jsxs)("form",{onSubmit:I,children:[Object(n.jsxs)("div",{className:"form-group",children:[Object(n.jsx)("label",{children:"Email"}),Object(n.jsx)("input",{className:"form-control",placeholder:"Email",name:"email",type:"email",value:r.email,onChange:L})]}),Object(n.jsxs)("div",{className:"form-group",children:[Object(n.jsx)("label",{children:"Password"}),Object(n.jsx)("input",{className:"form-control",placeholder:"Password",name:"password",type:"password",value:r.password,onChange:L})]}),Object(n.jsxs)("div",{className:"row align-items-center",children:[Object(n.jsx)("div",{className:"col-lg-6 col-md-6 col-sm-6 remember-me-wrap",children:Object(n.jsxs)("p",{children:[Object(n.jsx)("input",{type:"checkbox",id:"test2"}),Object(n.jsx)("label",{htmlFor:"test2",children:"Remember me"})]})}),Object(n.jsx)("div",{className:"col-lg-6 col-md-6 col-sm-6 lost-your-password-wrap",children:Object(n.jsx)(j.a,{href:"/reset-password",children:Object(n.jsx)("a",{className:"lost-your-password",children:"Lost your password?"})})})]}),Object(n.jsxs)("button",{type:"submit",disabled:b,children:["Log In",P?Object(n.jsx)(d.a,{color:"success"}):""]})]})]})};function P(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)}return r}function E(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?P(Object(r),!0).forEach((function(t){Object(u.a)(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):P(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}var S={name:"",email:"",password:"",confirmPassword:""},C=function(){var e=a.a.useState(S),t=Object(f.a)(e,2),r=t[0],o=t[1],c=a.a.useState(!0),s=Object(f.a)(c,2),b=s[0],j=s[1],m=a.a.useState(!1),y=Object(f.a)(m,2),w=y[0],x=y[1],N=a.a.useState(""),P=Object(f.a)(N,2),C=P[0],k=P[1];a.a.useEffect((function(){var e=Object.values(r).every((function(e){return Boolean(e)}));j(!e)}),[r]);var D=function(e){var t=e.target,r=t.name,n=t.value;o((function(e){return E(E({},e),{},Object(u.a)({},r,n))}))},L=function(){var e=Object(l.a)(i.a.mark((function e(t){var n,o,a;return i.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return t.preventDefault(),e.prev=1,x(!0),k(""),n="".concat(O.a,"/api/v1/auth/signup"),o=E({},r),e.next=8,v.a.post(n,o);case 8:a=e.sent,Object(g.a)(a.data),e.next=15;break;case 12:e.prev=12,e.t0=e.catch(1),Object(h.a)(e.t0,k);case 15:return e.prev=15,x(!1),e.finish(15);case 18:case"end":return e.stop()}}),e,null,[[1,12,15,18]])})));return function(t){return e.apply(this,arguments)}}();return Object(n.jsxs)("div",{className:"register-form",children:[Object(n.jsx)("h2",{children:"Register"}),Object(n.jsx)(p.a,{color:"danger",isOpen:!!C,toggle:function(){return k(!1)},children:C}),Object(n.jsxs)("form",{onSubmit:L,children:[Object(n.jsxs)("div",{className:"form-group",children:[Object(n.jsx)("label",{children:"Name"}),Object(n.jsx)("input",{type:"text",className:"form-control",placeholder:"Full Name",name:"name",value:r.name,onChange:D})]}),Object(n.jsxs)("div",{className:"form-group",children:[Object(n.jsx)("label",{children:"Email"}),Object(n.jsx)("input",{className:"form-control",placeholder:"Email",name:"email",type:"email",value:r.email,onChange:D})]}),Object(n.jsxs)("div",{className:"form-group",children:[Object(n.jsx)("label",{children:"Password"}),Object(n.jsx)("input",{type:"password",className:"form-control",placeholder:"Password",name:"password",value:r.password,onChange:D})]}),Object(n.jsxs)("div",{className:"form-group",children:[Object(n.jsx)("label",{children:"Confirm Password"}),Object(n.jsx)("input",{type:"password",className:"form-control",placeholder:"Confirm Password",name:"confirmPassword",value:r.confirmPassword,onChange:D})]}),Object(n.jsx)("p",{className:"description",children:'The password should be at least eight characters long. To make it stronger, use upper and lower case letters, numbers, and symbols like ! " ? $ % ^ & )'}),Object(n.jsxs)("button",{type:"submit",disabled:b,children:["Register",w?Object(n.jsx)(d.a,{color:"success"}):""]})]})]})};t.default=function(){return Object(n.jsxs)(a.a.Fragment,{children:[Object(n.jsx)(c.a,{pageTitle:"Authentication",homePageUrl:"/",homePageText:"Home",activePageText:"Authentication"}),Object(n.jsx)("div",{className:"profile-authentication-area ptb-100",children:Object(n.jsx)("div",{className:"container",children:Object(n.jsxs)("div",{className:"row",children:[Object(n.jsx)("div",{className:"col-lg-6 col-md-12",children:Object(n.jsx)(N,{})}),Object(n.jsx)("div",{className:"col-lg-6 col-md-12",children:Object(n.jsx)(C,{})})]})})})]})}},p46w:function(e,t,r){var n,o;!function(a){if(void 0===(o="function"===typeof(n=a)?n.call(t,r,t,e):n)||(e.exports=o),!0,e.exports=a(),!!0){var c=window.Cookies,s=window.Cookies=a();s.noConflict=function(){return window.Cookies=c,s}}}((function(){function e(){for(var e=0,t={};e<arguments.length;e++){var r=arguments[e];for(var n in r)t[n]=r[n]}return t}function t(e){return e.replace(/(%[0-9A-Z]{2})+/g,decodeURIComponent)}return function r(n){function o(){}function a(t,r,a){if("undefined"!==typeof document){"number"===typeof(a=e({path:"/"},o.defaults,a)).expires&&(a.expires=new Date(1*new Date+864e5*a.expires)),a.expires=a.expires?a.expires.toUTCString():"";try{var c=JSON.stringify(r);/^[\{\[]/.test(c)&&(r=c)}catch(l){}r=n.write?n.write(r,t):encodeURIComponent(String(r)).replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g,decodeURIComponent),t=encodeURIComponent(String(t)).replace(/%(23|24|26|2B|5E|60|7C)/g,decodeURIComponent).replace(/[\(\)]/g,escape);var s="";for(var i in a)a[i]&&(s+="; "+i,!0!==a[i]&&(s+="="+a[i].split(";")[0]));return document.cookie=t+"="+r+s}}function c(e,r){if("undefined"!==typeof document){for(var o={},a=document.cookie?document.cookie.split("; "):[],c=0;c<a.length;c++){var s=a[c].split("="),i=s.slice(1).join("=");r||'"'!==i.charAt(0)||(i=i.slice(1,-1));try{var l=t(s[0]);if(i=(n.read||n)(i,l)||t(i),r)try{i=JSON.parse(i)}catch(u){}if(o[l]=i,e===l)break}catch(u){}}return e?o[e]:o}}return o.set=a,o.get=function(e){return c(e,!1)},o.getJSON=function(e){return c(e,!0)},o.remove=function(t,r){a(t,"",e(r,{expires:-1}))},o.defaults={},o.withConverter=r,o}((function(){}))}))},rePB:function(e,t,r){"use strict";function n(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}r.d(t,"a",(function(){return n}))},vNVm:function(e,t,r){"use strict";var n=r("zoAU"),o=r("AroE");t.__esModule=!0,t.useIntersection=function(e){var t=e.rootMargin,r=e.disabled||!s,o=(0,a.useRef)(),l=(0,a.useState)(!1),u=n(l,2),f=u[0],p=u[1],d=(0,a.useCallback)((function(e){o.current&&(o.current(),o.current=void 0),r||f||e&&e.tagName&&(o.current=function(e,t,r){var n=function(e){var t=e.rootMargin||"",r=i.get(t);if(r)return r;var n=new Map,o=new IntersectionObserver((function(e){e.forEach((function(e){var t=n.get(e.target),r=e.isIntersecting||e.intersectionRatio>0;t&&r&&t(r)}))}),e);return i.set(t,r={id:t,observer:o,elements:n}),r}(r),o=n.id,a=n.observer,c=n.elements;return c.set(e,t),a.observe(e),function(){c.delete(e),a.unobserve(e),0===c.size&&(a.disconnect(),i.delete(o))}}(e,(function(e){return e&&p(e)}),{rootMargin:t}))}),[r,t,f]);return(0,a.useEffect)((function(){s||f||(0,c.default)((function(){return p(!0)}))}),[f]),[d,f]};var a=r("q1tI"),c=o(r("0G5g")),s="undefined"!==typeof IntersectionObserver;var i=new Map}},[["eGLW",0,2,1,5,6,10]]]);