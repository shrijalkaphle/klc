_N_E=(window.webpackJsonp_N_E=window.webpackJsonp_N_E||[]).push([[32],{"60Bi":function(e,s,t){"use strict";Object.defineProperty(s,"__esModule",{value:!0});var a=function(){function e(e,s){for(var t=0;t<s.length;t++){var a=s[t];a.enumerable=a.enumerable||!1,a.configurable=!0,"value"in a&&(a.writable=!0),Object.defineProperty(e,a.key,a)}}return function(s,t,a){return t&&e(s.prototype,t),a&&e(s,a),s}}(),c=l(t("q1tI")),i=l(t("Si88"));function l(e){return e&&e.__esModule?e:{default:e}}var n=function(e){function s(e){!function(e,s){if(!(e instanceof s))throw new TypeError("Cannot call a class as a function")}(this,s);var t=function(e,s){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!s||"object"!==typeof s&&"function"!==typeof s?e:s}(this,(s.__proto__||Object.getPrototypeOf(s)).call(this,e));return t.state={isOpen:!1},t.closeModal=t.closeModal.bind(t),t.updateFocus=t.updateFocus.bind(t),t}return function(e,s){if("function"!==typeof s&&null!==s)throw new TypeError("Super expression must either be null or a function, not "+typeof s);e.prototype=Object.create(s&&s.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),s&&(Object.setPrototypeOf?Object.setPrototypeOf(e,s):e.__proto__=s)}(s,e),a(s,[{key:"openModal",value:function(){this.setState({isOpen:!0})}},{key:"closeModal",value:function(){this.setState({isOpen:!1}),"function"===typeof this.props.onClose&&this.props.onClose()}},{key:"keydownHandler",value:function(e){27===e.keyCode&&this.closeModal()}},{key:"componentDidMount",value:function(){document.addEventListener("keydown",this.keydownHandler.bind(this))}},{key:"componentWillUnmount",value:function(){document.removeEventListener("keydown",this.keydownHandler.bind(this))}},{key:"componentDidUpdate",value:function(){this.state.isOpen&&this.modal&&this.modal.focus()}},{key:"updateFocus",value:function(e){9===e.keyCode&&(e.preventDefault(),e.stopPropagation(),this.modal===document.activeElement?this.modalbtn.focus():this.modal.focus())}},{key:"getQueryString",value:function(e){var s="";for(var t in e)e.hasOwnProperty(t)&&null!==e[t]&&(s+=t+"="+e[t]+"&");return s.substr(0,s.length-1)}},{key:"getYoutubeUrl",value:function(e,s){return"//www.youtube.com/embed/"+s+"?"+this.getQueryString(e)}},{key:"getVimeoUrl",value:function(e,s){return"//player.vimeo.com/video/"+s+"?"+this.getQueryString(e)}},{key:"getYoukuUrl",value:function(e,s){return"//player.youku.com/embed/"+s+"?"+this.getQueryString(e)}},{key:"getVideoUrl",value:function(e,s){return"youtube"===e.channel?this.getYoutubeUrl(e.youtube,s):"vimeo"===e.channel?this.getVimeoUrl(e.vimeo,s):"youku"===e.channel?this.getYoukuUrl(e.youku,s):"custom"===e.channel?e.url:void 0}},{key:"getPadding",value:function(e){var s=e.split(":"),t=Number(s[0]);return 100*Number(s[1])/t+"%"}},{key:"render",value:function(){var e=this,s={paddingBottom:this.getPadding(this.props.ratio)};return c.default.createElement(i.default,{classNames:this.props.classNames.modalVideoEffect,timeout:this.props.animationSpeed},(function(){return e.state.isOpen?c.default.createElement("div",{className:e.props.classNames.modalVideo,tabIndex:"-1",role:"dialog","aria-label":e.props.aria.openMessage,onClick:e.closeModal,ref:function(s){e.modal=s},onKeyDown:e.updateFocus},c.default.createElement("div",{className:e.props.classNames.modalVideoBody},c.default.createElement("div",{className:e.props.classNames.modalVideoInner},c.default.createElement("div",{className:e.props.classNames.modalVideoIframeWrap,style:s},c.default.createElement("button",{className:e.props.classNames.modalVideoCloseBtn,"aria-label":e.props.aria.dismissBtnMessage,ref:function(s){e.modalbtn=s},onKeyDown:e.updateFocus}),e.props.children||c.default.createElement("iframe",{width:"460",height:"230",src:e.getVideoUrl(e.props,e.props.videoId),frameBorder:"0",allow:"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture",allowFullScreen:e.props.allowFullScreen,tabIndex:"-1"}))))):null}))}}],[{key:"getDerivedStateFromProps",value:function(e){return{isOpen:e.isOpen}}}]),s}(c.default.Component);s.default=n,n.defaultProps={channel:"youtube",isOpen:!1,youtube:{autoplay:1,cc_load_policy:1,color:null,controls:1,disablekb:0,enablejsapi:0,end:null,fs:1,h1:null,iv_load_policy:1,list:null,listType:null,loop:0,modestbranding:null,origin:null,playlist:null,playsinline:null,rel:0,showinfo:1,start:0,wmode:"transparent",theme:"dark",mute:0},ratio:"16:9",vimeo:{api:!1,autopause:!0,autoplay:!0,byline:!0,callback:null,color:null,height:null,loop:!1,maxheight:null,maxwidth:null,player_id:null,portrait:!0,title:!0,width:null,xhtml:!1},youku:{autoplay:1,show_related:0},allowFullScreen:!0,animationSpeed:300,classNames:{modalVideoEffect:"modal-video-effect",modalVideo:"modal-video",modalVideoClose:"modal-video-close",modalVideoBody:"modal-video-body",modalVideoInner:"modal-video-inner",modalVideoIframeWrap:"modal-video-movie-wrap",modalVideoCloseBtn:"modal-video-close-btn"},aria:{openMessage:"You just openned the modal video",dismissBtnMessage:"Close the modal by clicking here"}}},"7pJ3":function(e,s,t){"use strict";var a=t("nKUr"),c=(t("q1tI"),t("YFqc")),i=t.n(c);s.a=function(){return Object(a.jsxs)("div",{className:"premium-access-area",children:[Object(a.jsx)("div",{className:"container",children:Object(a.jsxs)("div",{className:"premium-access-content",children:[Object(a.jsx)("span",{className:"sub-title",children:"Go at your own pace"}),Object(a.jsx)("h2",{children:"Give their limitless potential unlimited access"}),Object(a.jsx)("p",{children:"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."}),Object(a.jsx)(i.a,{href:"/membership-levels",children:Object(a.jsxs)("a",{className:"default-btn",children:[Object(a.jsx)("i",{className:"flaticon-user"})," Give Premium Access ",Object(a.jsx)("span",{})]})})]})}),Object(a.jsx)("div",{className:"shape3",children:Object(a.jsx)("img",{src:"/images/shape3.png",alt:"image"})}),Object(a.jsx)("div",{className:"shape4",children:Object(a.jsx)("img",{src:"/images/shape4.png",alt:"image"})}),Object(a.jsx)("div",{className:"shape8",children:Object(a.jsx)("img",{src:"/images/shape7.png",alt:"image"})})]})}},Ix5F:function(e,s,t){"use strict";var a=t("nKUr"),c=(t("q1tI"),t("YFqc")),i=t.n(c);s.a=function(e){var s=e.pageTitle,t=e.homePageUrl,c=e.homePageText,l=e.activePageText;return Object(a.jsxs)("div",{className:"page-title-area",children:[Object(a.jsx)("div",{className:"container",children:Object(a.jsxs)("div",{className:"page-title-content",children:[Object(a.jsxs)("ul",{children:[Object(a.jsx)("li",{children:Object(a.jsx)(i.a,{href:t,children:Object(a.jsx)("a",{children:c})})}),Object(a.jsx)("li",{className:"active",children:l})]}),Object(a.jsx)("h2",{children:s})]})}),Object(a.jsx)("div",{className:"shape9",children:Object(a.jsx)("img",{src:"/images/shape8.svg",alt:"image"})})]})}},JcBV:function(e,s,t){"use strict";var a=t("nKUr");t("q1tI");s.a=function(){return Object(a.jsx)("div",{className:"funfacts-area bg-fffaf3",children:Object(a.jsx)("div",{className:"container",children:Object(a.jsxs)("div",{className:"row",children:[Object(a.jsx)("div",{className:"col-lg-3 col-md-3 col-sm-6",children:Object(a.jsxs)("div",{className:"single-funfacts-item",children:[Object(a.jsx)("h3",{children:"1926"}),Object(a.jsx)("p",{children:"Finished Sessions"})]})}),Object(a.jsx)("div",{className:"col-lg-3 col-md-3 col-sm-6",children:Object(a.jsxs)("div",{className:"single-funfacts-item",children:[Object(a.jsx)("h3",{children:"3279"}),Object(a.jsx)("p",{children:"Enrolled Learners"})]})}),Object(a.jsx)("div",{className:"col-lg-3 col-md-3 col-sm-6",children:Object(a.jsxs)("div",{className:"single-funfacts-item",children:[Object(a.jsx)("h3",{children:"250"}),Object(a.jsx)("p",{children:"Online Instructors"})]})}),Object(a.jsx)("div",{className:"col-lg-3 col-md-3 col-sm-6",children:Object(a.jsxs)("div",{className:"single-funfacts-item",children:[Object(a.jsx)("h3",{children:"100%"}),Object(a.jsx)("p",{children:"Satisfaction Rate"})]})})]})})})}},cKI9:function(e,s,t){(window.__NEXT_P=window.__NEXT_P||[]).push(["/about-3",function(){return t("iYO3")}])},"d/qs":function(e,s,t){"use strict";var a=t("rePB"),c=t("nKUr"),i=t("ODXe"),l=t("q1tI"),n=t.n(l),r=t("Vvt1");function o(e,s){var t=Object.keys(e);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(e);s&&(a=a.filter((function(s){return Object.getOwnPropertyDescriptor(e,s).enumerable}))),t.push.apply(t,a)}return t}function d(e){for(var s=1;s<arguments.length;s++){var t=null!=arguments[s]?arguments[s]:{};s%2?o(Object(t),!0).forEach((function(s){Object(a.a)(e,s,t[s])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(t)):o(Object(t)).forEach((function(s){Object.defineProperty(e,s,Object.getOwnPropertyDescriptor(t,s))}))}return e}var j=t.n(r)()((function(){return t.e(3).then(t.t.bind(null,"Rst5",7))}),{loadableGenerated:{webpack:function(){return["Rst5"]},modules:["react-owl-carousel3"]}}),b={loop:!0,nav:!1,dots:!0,autoplayHoverPause:!0,autoplay:!0,margin:30,navText:["<i class='bx bx-chevron-left'></i>","<i class='bx bx-chevron-right'></i>"],responsive:{0:{items:1},576:{items:1},768:{items:2},1200:{items:2}}};s.a=function(){var e=n.a.useState(!1),s=Object(i.a)(e,2),t=s[0],a=s[1];return n.a.useEffect((function(){a(!0)}),[]),Object(c.jsxs)("div",{className:"feedback-area bg-fffaf3 ptb-100",children:[Object(c.jsx)("div",{className:"container",children:t?Object(c.jsxs)(j,d(d({className:"feedback-slides-two owl-carousel owl-theme"},b),{},{children:[Object(c.jsxs)("div",{className:"single-feedback-box",children:[Object(c.jsx)("p",{children:"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum  ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed tempor incididunt ut labore et dolore."}),Object(c.jsxs)("div",{className:"client-info d-flex align-items-center",children:[Object(c.jsx)("img",{src:"/images/user1.jpg",className:"rounded-circle",alt:"image"}),Object(c.jsxs)("div",{className:"title",children:[Object(c.jsx)("h3",{children:"John Smith"}),Object(c.jsx)("span",{children:"Python Developer"})]})]})]}),Object(c.jsxs)("div",{className:"single-feedback-box",children:[Object(c.jsx)("p",{children:"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum  ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed tempor incididunt ut labore et dolore."}),Object(c.jsxs)("div",{className:"client-info d-flex align-items-center",children:[Object(c.jsx)("img",{src:"/images/user2.jpg",className:"rounded-circle",alt:"image"}),Object(c.jsxs)("div",{className:"title",children:[Object(c.jsx)("h3",{children:"Sarah Taylor"}),Object(c.jsx)("span",{children:"PHP Developer"})]})]})]}),Object(c.jsxs)("div",{className:"single-feedback-box",children:[Object(c.jsx)("p",{children:"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum  ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed tempor incididunt ut labore et dolore."}),Object(c.jsxs)("div",{className:"client-info d-flex align-items-center",children:[Object(c.jsx)("img",{src:"/images/user1.jpg",className:"rounded-circle",alt:"image"}),Object(c.jsxs)("div",{className:"title",children:[Object(c.jsx)("h3",{children:"David Warner"}),Object(c.jsx)("span",{children:"QA Developer"})]})]})]})]})):""}),Object(c.jsx)("div",{className:"divider2"}),Object(c.jsx)("div",{className:"divider3"}),Object(c.jsx)("div",{className:"shape2",children:Object(c.jsx)("img",{src:"/images/shape2.png",alt:"image"})}),Object(c.jsx)("div",{className:"shape3",children:Object(c.jsx)("img",{src:"/images/shape3.png",alt:"image"})}),Object(c.jsx)("div",{className:"shape4",children:Object(c.jsx)("img",{src:"/images/shape4.png",alt:"image"})}),Object(c.jsx)("div",{className:"shape9",children:Object(c.jsx)("img",{src:"/images/shape8.svg",alt:"image"})})]})}},iYO3:function(e,s,t){"use strict";t.r(s);var a=t("nKUr"),c=t("q1tI"),i=t.n(c),l=t("Ix5F"),n=t("YFqc"),r=t.n(n),o=function(){return Object(a.jsx)("div",{className:"features-area pt-100 pb-70",children:Object(a.jsxs)("div",{className:"container",children:[Object(a.jsxs)("div",{className:"section-title",children:[Object(a.jsx)("span",{className:"sub-title",children:"Education for everyone"}),Object(a.jsx)("h2",{children:"Online Coaching Lessons For Remote Learning"}),Object(a.jsx)("p",{children:"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."})]}),Object(a.jsxs)("div",{className:"row",children:[Object(a.jsx)("div",{className:"col-lg-4 col-sm-6 col-md-6",children:Object(a.jsxs)("div",{className:"single-features-box without-padding",children:[Object(a.jsx)("div",{className:"icon",children:Object(a.jsx)("i",{className:"flaticon-brain-process"})}),Object(a.jsx)("h3",{children:"Learn the Latest Skills"}),Object(a.jsx)("p",{children:"There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration."}),Object(a.jsx)(r.a,{href:"/profile-authentication",children:Object(a.jsx)("a",{className:"link-btn",children:"Start Now!"})})]})}),Object(a.jsx)("div",{className:"col-lg-4 col-sm-6 col-md-6",children:Object(a.jsxs)("div",{className:"single-features-box without-padding",children:[Object(a.jsx)("div",{className:"icon",children:Object(a.jsx)("i",{className:"flaticon-computer"})}),Object(a.jsx)("h3",{children:"Go at Your Own Pace"}),Object(a.jsx)("p",{children:"There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration."}),Object(a.jsx)(r.a,{href:"/profile-authentication",children:Object(a.jsx)("a",{className:"link-btn",children:"Start Now!"})})]})}),Object(a.jsx)("div",{className:"col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3",children:Object(a.jsxs)("div",{className:"single-features-box without-padding",children:[Object(a.jsx)("div",{className:"icon",children:Object(a.jsx)("i",{className:"flaticon-shield-1"})}),Object(a.jsx)("h3",{children:"Learn from Industry Experts"}),Object(a.jsx)("p",{children:"There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration."}),Object(a.jsx)(r.a,{href:"/profile-authentication",children:Object(a.jsx)("a",{className:"link-btn",children:"Start Now!"})})]})})]})]})})},d=t("ODXe"),j=t("60Bi"),b=t.n(j),m=function(){var e=i.a.useState(!0),s=Object(d.a)(e,2),t=s[0],c=s[1];return Object(a.jsxs)(i.a.Fragment,{children:[Object(a.jsxs)("div",{className:"about-area-two pb-100",children:[Object(a.jsx)("div",{className:"container",children:Object(a.jsxs)("div",{className:"row align-items-center",children:[Object(a.jsx)("div",{className:"col-lg-5 col-md-12",children:Object(a.jsxs)("div",{className:"about-content-box",children:[Object(a.jsx)("span",{className:"sub-title",children:"Distance Learning"}),Object(a.jsx)("h2",{children:"Build Your Project Management Skills Online, Anytime"}),Object(a.jsx)("p",{children:"Want to learn and earn PDUs or CEUs on your schedule \u2014 anytime, anywhere? Or, pick up a new skill quickly like, project team leadership or agile? Browse our most popular online courses."}),Object(a.jsx)("p",{children:Object(a.jsx)("strong",{children:"Grow your knowledge and your opportunities with thought leadership, training and tools."})})]})}),Object(a.jsx)("div",{className:"col-lg-7 col-md-12",children:Object(a.jsxs)("div",{className:"about-video-box",children:[Object(a.jsx)("div",{className:"image",children:Object(a.jsx)("img",{src:"/images/about-img6.jpg",alt:"image"})}),Object(a.jsx)(r.a,{href:"#play-video",children:Object(a.jsx)("a",{onClick:function(e){e.preventDefault(),c(!t)},className:"video-btn popup-youtube",children:Object(a.jsx)("i",{className:"flaticon-play"})})}),Object(a.jsx)("div",{className:"shape10",children:Object(a.jsx)("img",{src:"/images/shape9.png",alt:"image"})})]})})]})}),Object(a.jsx)("div",{className:"shape3",children:Object(a.jsx)("img",{src:"/images/shape3.png",alt:"image"})}),Object(a.jsx)("div",{className:"shape4",children:Object(a.jsx)("img",{src:"/images/shape4.png",alt:"image"})}),Object(a.jsx)("div",{className:"shape2",children:Object(a.jsx)("img",{src:"/images/shape2.png",alt:"image"})})]}),Object(a.jsx)(b.a,{channel:"youtube",isOpen:!t,videoId:"bk7McNUjWgw",onClose:function(){return c(!t)}})]})},u=t("d/qs"),h=t("rePB"),p=t("Vvt1");function x(e,s){var t=Object.keys(e);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(e);s&&(a=a.filter((function(s){return Object.getOwnPropertyDescriptor(e,s).enumerable}))),t.push.apply(t,a)}return t}function O(e){for(var s=1;s<arguments.length;s++){var t=null!=arguments[s]?arguments[s]:{};s%2?x(Object(t),!0).forEach((function(s){Object(h.a)(e,s,t[s])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(t)):x(Object(t)).forEach((function(s){Object.defineProperty(e,s,Object.getOwnPropertyDescriptor(t,s))}))}return e}var g=t.n(p)()((function(){return t.e(3).then(t.t.bind(null,"Rst5",7))}),{loadableGenerated:{webpack:function(){return["Rst5"]},modules:["react-owl-carousel3"]}}),f={loop:!0,nav:!1,dots:!0,autoplayHoverPause:!0,autoplay:!0,margin:30,navText:["<i class='bx bx-chevron-left'></i>","<i class='bx bx-chevron-right'></i>"],responsive:{0:{items:1},576:{items:2},768:{items:2},992:{items:3}}},v=function(){var e=i.a.useState(!1),s=Object(d.a)(e,2),t=s[0],c=s[1];return i.a.useEffect((function(){c(!0)}),[]),Object(a.jsx)("div",{className:"advisor-area bg-f9f9f9 ptb-100",children:Object(a.jsxs)("div",{className:"container",children:[Object(a.jsxs)("div",{className:"section-title",children:[Object(a.jsx)("span",{className:"sub-title",children:"Course Advisor"}),Object(a.jsx)("h2",{children:"Meet Our World-class Instructors"}),Object(a.jsx)("p",{children:"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."})]}),t?Object(a.jsxs)(g,O(O({className:"advisor-slides-two owl-carousel owl-theme"},f),{},{children:[Object(a.jsxs)("div",{className:"single-advisor-item",children:[Object(a.jsxs)("div",{className:"advisor-image",children:[Object(a.jsx)("img",{src:"/images/advisor/advisor4.jpg",alt:"image"}),Object(a.jsxs)("ul",{className:"social-link",children:[Object(a.jsx)("li",{children:Object(a.jsx)("a",{href:"#",className:"d-block",target:"_blank",children:Object(a.jsx)("i",{className:"bx bxl-facebook"})})}),Object(a.jsx)("li",{children:Object(a.jsx)("a",{href:"#",className:"d-block",target:"_blank",children:Object(a.jsx)("i",{className:"bx bxl-twitter"})})}),Object(a.jsx)("li",{children:Object(a.jsx)("a",{href:"#",className:"d-block",target:"_blank",children:Object(a.jsx)("i",{className:"bx bxl-instagram"})})}),Object(a.jsx)("li",{children:Object(a.jsx)("a",{href:"#",className:"d-block",target:"_blank",children:Object(a.jsx)("i",{className:"bx bxl-linkedin"})})})]})]}),Object(a.jsxs)("div",{className:"advisor-content",children:[Object(a.jsx)("h3",{children:Object(a.jsx)(r.a,{href:"/profile",children:Object(a.jsx)("a",{children:"James Andy"})})}),Object(a.jsx)("span",{children:"Project Management Expert"})]})]}),Object(a.jsxs)("div",{className:"single-advisor-item",children:[Object(a.jsxs)("div",{className:"advisor-image",children:[Object(a.jsx)("img",{src:"/images/advisor/advisor5.jpg",alt:"image"}),Object(a.jsxs)("ul",{className:"social-link",children:[Object(a.jsx)("li",{children:Object(a.jsx)("a",{href:"#",className:"d-block",target:"_blank",children:Object(a.jsx)("i",{className:"bx bxl-facebook"})})}),Object(a.jsx)("li",{children:Object(a.jsx)("a",{href:"#",className:"d-block",target:"_blank",children:Object(a.jsx)("i",{className:"bx bxl-twitter"})})}),Object(a.jsx)("li",{children:Object(a.jsx)("a",{href:"#",className:"d-block",target:"_blank",children:Object(a.jsx)("i",{className:"bx bxl-instagram"})})}),Object(a.jsx)("li",{children:Object(a.jsx)("a",{href:"#",className:"d-block",target:"_blank",children:Object(a.jsx)("i",{className:"bx bxl-linkedin"})})})]})]}),Object(a.jsxs)("div",{className:"advisor-content",children:[Object(a.jsx)("h3",{children:Object(a.jsx)(r.a,{href:"/profile",children:Object(a.jsx)("a",{children:"Jassica Hische"})})}),Object(a.jsx)("span",{children:"Illustrator Expert"})]})]}),Object(a.jsxs)("div",{className:"single-advisor-item",children:[Object(a.jsxs)("div",{className:"advisor-image",children:[Object(a.jsx)("img",{src:"/images/advisor/advisor6.jpg",alt:"image"}),Object(a.jsxs)("ul",{className:"social-link",children:[Object(a.jsx)("li",{children:Object(a.jsx)("a",{href:"#",className:"d-block",target:"_blank",children:Object(a.jsx)("i",{className:"bx bxl-facebook"})})}),Object(a.jsx)("li",{children:Object(a.jsx)("a",{href:"#",className:"d-block",target:"_blank",children:Object(a.jsx)("i",{className:"bx bxl-twitter"})})}),Object(a.jsx)("li",{children:Object(a.jsx)("a",{href:"#",className:"d-block",target:"_blank",children:Object(a.jsx)("i",{className:"bx bxl-instagram"})})}),Object(a.jsx)("li",{children:Object(a.jsx)("a",{href:"#",className:"d-block",target:"_blank",children:Object(a.jsx)("i",{className:"bx bxl-linkedin"})})})]})]}),Object(a.jsxs)("div",{className:"advisor-content",children:[Object(a.jsx)("h3",{children:Object(a.jsx)(r.a,{href:"/profile",children:Object(a.jsx)("a",{children:"Alister Cock"})})}),Object(a.jsx)("span",{children:"QA Project Expert"})]})]}),Object(a.jsxs)("div",{className:"single-advisor-item",children:[Object(a.jsxs)("div",{className:"advisor-image",children:[Object(a.jsx)("img",{src:"/images/advisor/advisor7.jpg",alt:"image"}),Object(a.jsxs)("ul",{className:"social-link",children:[Object(a.jsx)("li",{children:Object(a.jsx)("a",{href:"#",className:"d-block",target:"_blank",children:Object(a.jsx)("i",{className:"bx bxl-facebook"})})}),Object(a.jsx)("li",{children:Object(a.jsx)("a",{href:"#",className:"d-block",target:"_blank",children:Object(a.jsx)("i",{className:"bx bxl-twitter"})})}),Object(a.jsx)("li",{children:Object(a.jsx)("a",{href:"#",className:"d-block",target:"_blank",children:Object(a.jsx)("i",{className:"bx bxl-instagram"})})}),Object(a.jsx)("li",{children:Object(a.jsx)("a",{href:"#",className:"d-block",target:"_blank",children:Object(a.jsx)("i",{className:"bx bxl-linkedin"})})})]})]}),Object(a.jsxs)("div",{className:"advisor-content",children:[Object(a.jsx)("h3",{children:Object(a.jsx)(r.a,{href:"/profile",children:Object(a.jsx)("a",{children:"Lina Ninja"})})}),Object(a.jsx)("span",{children:"QA Project Expert"})]})]})]})):""]})})},N=t("JcBV"),y=t("7pJ3");s.default=function(){return Object(a.jsxs)(i.a.Fragment,{children:[Object(a.jsx)(l.a,{pageTitle:"About Us",homePageUrl:"/",homePageText:"Home",activePageText:"About Us"}),Object(a.jsx)(o,{}),Object(a.jsx)(m,{}),Object(a.jsx)(u.a,{}),Object(a.jsx)(v,{}),Object(a.jsx)(N.a,{}),Object(a.jsx)("div",{className:"ptb-100",children:Object(a.jsx)(y.a,{})})]})}}},[["cKI9",0,2,1,4,6]]]);