_N_E=(window.webpackJsonp_N_E=window.webpackJsonp_N_E||[]).push([[62],{"60Bi":function(e,s,t){"use strict";Object.defineProperty(s,"__esModule",{value:!0});var c=function(){function e(e,s){for(var t=0;t<s.length;t++){var c=s[t];c.enumerable=c.enumerable||!1,c.configurable=!0,"value"in c&&(c.writable=!0),Object.defineProperty(e,c.key,c)}}return function(s,t,c){return t&&e(s.prototype,t),c&&e(s,c),s}}(),i=l(t("q1tI")),a=l(t("Si88"));function l(e){return e&&e.__esModule?e:{default:e}}var n=function(e){function s(e){!function(e,s){if(!(e instanceof s))throw new TypeError("Cannot call a class as a function")}(this,s);var t=function(e,s){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!s||"object"!==typeof s&&"function"!==typeof s?e:s}(this,(s.__proto__||Object.getPrototypeOf(s)).call(this,e));return t.state={isOpen:!1},t.closeModal=t.closeModal.bind(t),t.updateFocus=t.updateFocus.bind(t),t}return function(e,s){if("function"!==typeof s&&null!==s)throw new TypeError("Super expression must either be null or a function, not "+typeof s);e.prototype=Object.create(s&&s.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),s&&(Object.setPrototypeOf?Object.setPrototypeOf(e,s):e.__proto__=s)}(s,e),c(s,[{key:"openModal",value:function(){this.setState({isOpen:!0})}},{key:"closeModal",value:function(){this.setState({isOpen:!1}),"function"===typeof this.props.onClose&&this.props.onClose()}},{key:"keydownHandler",value:function(e){27===e.keyCode&&this.closeModal()}},{key:"componentDidMount",value:function(){document.addEventListener("keydown",this.keydownHandler.bind(this))}},{key:"componentWillUnmount",value:function(){document.removeEventListener("keydown",this.keydownHandler.bind(this))}},{key:"componentDidUpdate",value:function(){this.state.isOpen&&this.modal&&this.modal.focus()}},{key:"updateFocus",value:function(e){9===e.keyCode&&(e.preventDefault(),e.stopPropagation(),this.modal===document.activeElement?this.modalbtn.focus():this.modal.focus())}},{key:"getQueryString",value:function(e){var s="";for(var t in e)e.hasOwnProperty(t)&&null!==e[t]&&(s+=t+"="+e[t]+"&");return s.substr(0,s.length-1)}},{key:"getYoutubeUrl",value:function(e,s){return"//www.youtube.com/embed/"+s+"?"+this.getQueryString(e)}},{key:"getVimeoUrl",value:function(e,s){return"//player.vimeo.com/video/"+s+"?"+this.getQueryString(e)}},{key:"getYoukuUrl",value:function(e,s){return"//player.youku.com/embed/"+s+"?"+this.getQueryString(e)}},{key:"getVideoUrl",value:function(e,s){return"youtube"===e.channel?this.getYoutubeUrl(e.youtube,s):"vimeo"===e.channel?this.getVimeoUrl(e.vimeo,s):"youku"===e.channel?this.getYoukuUrl(e.youku,s):"custom"===e.channel?e.url:void 0}},{key:"getPadding",value:function(e){var s=e.split(":"),t=Number(s[0]);return 100*Number(s[1])/t+"%"}},{key:"render",value:function(){var e=this,s={paddingBottom:this.getPadding(this.props.ratio)};return i.default.createElement(a.default,{classNames:this.props.classNames.modalVideoEffect,timeout:this.props.animationSpeed},(function(){return e.state.isOpen?i.default.createElement("div",{className:e.props.classNames.modalVideo,tabIndex:"-1",role:"dialog","aria-label":e.props.aria.openMessage,onClick:e.closeModal,ref:function(s){e.modal=s},onKeyDown:e.updateFocus},i.default.createElement("div",{className:e.props.classNames.modalVideoBody},i.default.createElement("div",{className:e.props.classNames.modalVideoInner},i.default.createElement("div",{className:e.props.classNames.modalVideoIframeWrap,style:s},i.default.createElement("button",{className:e.props.classNames.modalVideoCloseBtn,"aria-label":e.props.aria.dismissBtnMessage,ref:function(s){e.modalbtn=s},onKeyDown:e.updateFocus}),e.props.children||i.default.createElement("iframe",{width:"460",height:"230",src:e.getVideoUrl(e.props,e.props.videoId),frameBorder:"0",allow:"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture",allowFullScreen:e.props.allowFullScreen,tabIndex:"-1"}))))):null}))}}],[{key:"getDerivedStateFromProps",value:function(e){return{isOpen:e.isOpen}}}]),s}(i.default.Component);s.default=n,n.defaultProps={channel:"youtube",isOpen:!1,youtube:{autoplay:1,cc_load_policy:1,color:null,controls:1,disablekb:0,enablejsapi:0,end:null,fs:1,h1:null,iv_load_policy:1,list:null,listType:null,loop:0,modestbranding:null,origin:null,playlist:null,playsinline:null,rel:0,showinfo:1,start:0,wmode:"transparent",theme:"dark",mute:0},ratio:"16:9",vimeo:{api:!1,autopause:!0,autoplay:!0,byline:!0,callback:null,color:null,height:null,loop:!1,maxheight:null,maxwidth:null,player_id:null,portrait:!0,title:!0,width:null,xhtml:!1},youku:{autoplay:1,show_related:0},allowFullScreen:!0,animationSpeed:300,classNames:{modalVideoEffect:"modal-video-effect",modalVideo:"modal-video",modalVideoClose:"modal-video-close",modalVideoBody:"modal-video-body",modalVideoInner:"modal-video-inner",modalVideoIframeWrap:"modal-video-movie-wrap",modalVideoCloseBtn:"modal-video-close-btn"},aria:{openMessage:"You just openned the modal video",dismissBtnMessage:"Close the modal by clicking here"}}},RNiq:function(e,s,t){"use strict";t.r(s);var c=t("o0o1"),i=t.n(c),a=t("HaE+"),l=t("nKUr"),n=t("q1tI"),r=t.n(n),o=t("YFqc"),d=t.n(o),j=function(){return Object(l.jsxs)("div",{className:"main-banner-area",children:[Object(l.jsx)("div",{className:"container-fluid",children:Object(l.jsxs)("div",{className:"row align-items-center",children:[Object(l.jsx)("div",{className:"col-lg-6 col-md-12",children:Object(l.jsxs)("div",{className:"main-banner-content-style-two",children:[Object(l.jsx)("h1",{children:"The World's Leading Distance-Learning Provider"}),Object(l.jsx)("p",{children:"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse."}),Object(l.jsx)(d.a,{href:"/authentication",children:Object(l.jsxs)("a",{className:"default-btn",children:[Object(l.jsx)("i",{className:"flaticon-user"}),"Join For Free",Object(l.jsx)("span",{})]})})]})}),Object(l.jsx)("div",{className:"col-lg-6 col-md-12",children:Object(l.jsx)("div",{className:"main-banner-image-style-two",children:Object(l.jsx)("img",{src:"/images/banner-img4.png",alt:"image"})})})]})}),Object(l.jsx)("div",{className:"banner-shape1",children:Object(l.jsx)("img",{src:"/images/banner-shape1.png",alt:"image"})}),Object(l.jsx)("div",{className:"banner-shape2",children:Object(l.jsx)("img",{src:"/images/banner-shape2.png",alt:"image"})}),Object(l.jsx)("div",{className:"banner-shape3",children:Object(l.jsx)("img",{src:"/images/banner-shape3.png",alt:"image"})}),Object(l.jsx)("div",{className:"bulb",children:Object(l.jsx)("img",{src:"/images/bulb.png",alt:"image"})})]})},m=function(){return Object(l.jsx)("div",{className:"features-area pt-100 pb-70 bg-fff8f8",children:Object(l.jsxs)("div",{className:"container",children:[Object(l.jsxs)("div",{className:"section-title",children:[Object(l.jsx)("span",{className:"sub-title",children:"EDUCATION FOR EVERYONE"}),Object(l.jsx)("h2",{children:"Online Coaching Lessons For Remote Learning\u200b"}),Object(l.jsx)("p",{children:"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."})]}),Object(l.jsxs)("div",{className:"row justify-content-center",children:[Object(l.jsx)("div",{className:"col-lg-4 col-sm-6 col-md-6",children:Object(l.jsxs)("div",{className:"features-box",children:[Object(l.jsx)("div",{className:"icon",children:Object(l.jsx)("i",{className:"flaticon-brain-process"})}),Object(l.jsx)("h3",{children:"Learn the Latest Skills"}),Object(l.jsx)("p",{children:"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor "}),Object(l.jsx)(d.a,{href:"/authentication",children:Object(l.jsx)("a",{className:"link-btn",children:"Start Now!"})}),Object(l.jsx)("div",{className:"back-icon",children:Object(l.jsx)("i",{className:"flaticon-brain-process"})})]})}),Object(l.jsx)("div",{className:"col-lg-4 col-sm-6 col-md-6",children:Object(l.jsxs)("div",{className:"features-box",children:[Object(l.jsx)("div",{className:"icon",children:Object(l.jsx)("i",{className:"flaticon-shield-1"})}),Object(l.jsx)("h3",{children:"Learn from Industry Experts"}),Object(l.jsx)("p",{children:"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor "}),Object(l.jsx)(d.a,{href:"/authentication",children:Object(l.jsx)("a",{className:"link-btn",children:"Start Now!"})}),Object(l.jsx)("div",{className:"back-icon",children:Object(l.jsx)("i",{className:"flaticon-shield-1"})})]})}),Object(l.jsx)("div",{className:"col-lg-4 col-sm-6 col-md-6",children:Object(l.jsxs)("div",{className:"features-box",children:[Object(l.jsx)("div",{className:"icon",children:Object(l.jsx)("i",{className:"flaticon-world"})}),Object(l.jsx)("h3",{children:"Learn From Anywhere"}),Object(l.jsx)("p",{children:"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor "}),Object(l.jsx)(d.a,{href:"/authentication",children:Object(l.jsx)("a",{className:"link-btn",children:"Start Now!"})}),Object(l.jsx)("div",{className:"back-icon",children:Object(l.jsx)("i",{className:"flaticon-world"})})]})})]})]})})},b=function(e){var s=e.courses;return Object(l.jsx)("div",{className:"courses-area ptb-100",children:Object(l.jsxs)("div",{className:"container",children:[Object(l.jsxs)("div",{className:"section-title",children:[Object(l.jsx)("span",{className:"sub-title",children:"GO AT YOUR OWN PACE"}),Object(l.jsx)("h2",{children:"Top Selling Courses"}),Object(l.jsx)("p",{children:"Explore all of our courses and pick your suitable ones to enroll and start learning with us! We ensure that you will never regret it!"})]}),Object(l.jsxs)("div",{className:"row",children:[s?s.map((function(e){return Object(l.jsx)("div",{className:"col-lg-4 col-md-6",children:Object(l.jsxs)("div",{className:"single-courses-box",children:[Object(l.jsxs)("div",{className:"courses-image",children:[Object(l.jsx)(d.a,{href:"/courses/[id]",as:"/courses/".concat(e.id),children:Object(l.jsx)("a",{className:"d-block image",children:Object(l.jsx)("img",{src:e.profilePhoto,alt:e.title})})}),Object(l.jsx)(d.a,{href:"#",children:Object(l.jsx)("a",{className:"fav",children:Object(l.jsx)("i",{className:"flaticon-heart"})})}),Object(l.jsxs)("div",{className:"price shadow",children:["$",e.price]})]}),Object(l.jsxs)("div",{className:"courses-content",children:[Object(l.jsxs)("div",{className:"course-author d-flex align-items-center",children:[Object(l.jsx)("img",{src:"".concat(e.user.profilePhoto?e.user.profilePhoto:"/images/user1.jpg"),className:"rounded-circle",alt:e.user.name}),Object(l.jsx)("span",{children:e.user.name})]}),Object(l.jsx)("h3",{title:e.title,children:Object(l.jsx)(d.a,{href:"/courses/[id]",as:"/courses/".concat(e.id),children:Object(l.jsxs)("a",{children:[e.title.slice(0,20),"..."]})})}),Object(l.jsxs)("p",{children:[e.overview.slice(0,100),"..."]}),Object(l.jsxs)("ul",{className:"courses-box-footer d-flex justify-content-between align-items-center",children:[Object(l.jsxs)("li",{children:[Object(l.jsx)("i",{className:"flaticon-agenda"})," ",parseInt(e.lessons)," Lessons"]}),Object(l.jsxs)("li",{children:[Object(l.jsx)("i",{className:"flaticon-people"})," ",e.enroled_courses.length," Students"]})]})]})]})},e.id)})):Object(l.jsx)("h2",{children:"Empty"}),Object(l.jsx)("div",{className:"col-lg-12 col-md-12",children:Object(l.jsx)("div",{className:"courses-info",children:Object(l.jsxs)("p",{children:["Enjoy the top notch learning methods and achieve next level skills! You are the creator of your own career & we will guide you through that. ",Object(l.jsx)(d.a,{href:"/authentication",children:Object(l.jsx)("a",{children:"Join Free Now"})}),"."]})})})]})]})})},u=function(){return Object(l.jsxs)("div",{className:"about-area ptb-100 bg-f9fbff",children:[Object(l.jsx)("div",{className:"container",children:Object(l.jsxs)("div",{className:"row align-items-center",children:[Object(l.jsx)("div",{className:"col-lg-6 col-md-12",children:Object(l.jsx)("div",{className:"about-image",children:Object(l.jsx)("img",{src:"/images/about-img12.png",alt:"image"})})}),Object(l.jsx)("div",{className:"col-lg-6 col-md-12",children:Object(l.jsxs)("div",{className:"about-content",children:[Object(l.jsx)("span",{className:"sub-title",children:"DISTANCE LEARNING"}),Object(l.jsx)("h2",{children:"Develop Your Skills, Learn Something New, and Grow Your Skills From Anywhere in the World!"}),Object(l.jsx)("p",{children:"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."}),Object(l.jsxs)("ul",{className:"features-list",children:[Object(l.jsx)("li",{children:Object(l.jsxs)("span",{children:[Object(l.jsx)("i",{className:"flaticon-experience"})," Expert Instruction"]})}),Object(l.jsx)("li",{children:Object(l.jsxs)("span",{children:[Object(l.jsx)("i",{className:"flaticon-time-left"})," Lifetime Access"]})}),Object(l.jsx)("li",{children:Object(l.jsxs)("span",{children:[Object(l.jsx)("i",{className:"flaticon-tutorials"})," Remote Learning"]})}),Object(l.jsx)("li",{children:Object(l.jsxs)("span",{children:[Object(l.jsx)("i",{className:"flaticon-self-growth"})," Self Development"]})})]}),Object(l.jsx)(d.a,{href:"/courses-1",children:Object(l.jsxs)("a",{className:"default-btn",children:[Object(l.jsx)("i",{className:"flaticon-user"}),"View All Courses",Object(l.jsx)("span",{})]})})]})})]})}),Object(l.jsx)("div",{className:"bulb",children:Object(l.jsx)("img",{src:"/images/bulb.png",alt:"image"})})]})},h=t("rePB"),O=t("ODXe"),x=t("Vvt1"),p=t.n(x);function g(e,s){var t=Object.keys(e);if(Object.getOwnPropertySymbols){var c=Object.getOwnPropertySymbols(e);s&&(c=c.filter((function(s){return Object.getOwnPropertyDescriptor(e,s).enumerable}))),t.push.apply(t,c)}return t}function f(e){for(var s=1;s<arguments.length;s++){var t=null!=arguments[s]?arguments[s]:{};s%2?g(Object(t),!0).forEach((function(s){Object(h.a)(e,s,t[s])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(t)):g(Object(t)).forEach((function(s){Object.defineProperty(e,s,Object.getOwnPropertyDescriptor(t,s))}))}return e}var v=p()((function(){return t.e(3).then(t.t.bind(null,"Rst5",7))}),{loadableGenerated:{webpack:function(){return["Rst5"]},modules:["react-owl-carousel3"]}}),N={loop:!0,nav:!0,dots:!1,autoplayHoverPause:!0,autoplay:!0,animateOut:"fadeOut",items:1,navText:["<i class='bx bx-chevron-left'></i>","<i class='bx bx-chevron-right'></i>"]},y=function(){var e=r.a.useState(!1),s=Object(O.a)(e,2),t=s[0],c=s[1];return r.a.useEffect((function(){c(!0)}),[]),Object(l.jsx)("div",{className:"testimonials-area ptb-100",children:Object(l.jsxs)("div",{className:"container",children:[Object(l.jsxs)("div",{className:"section-title",children:[Object(l.jsx)("span",{className:"sub-title",children:"Testimonials"}),Object(l.jsx)("h2",{children:"Our Learners Feedback"}),Object(l.jsx)("p",{children:"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."})]}),t?Object(l.jsxs)(v,f(f({className:"testimonials-slides-two owl-carousel owl-theme"},N),{},{children:[Object(l.jsx)("div",{className:"testimonials-item",children:Object(l.jsxs)("div",{className:"row align-items-center",children:[Object(l.jsxs)("div",{className:"col-lg-8 col-md-12",children:[Object(l.jsx)("p",{children:"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore."}),Object(l.jsx)("h3",{children:"John Smith"}),Object(l.jsx)("span",{children:"Python Developer"})]}),Object(l.jsx)("div",{className:"col-lg-4 col-md-12 text-center",children:Object(l.jsx)("img",{src:"/images/user7.png",alt:"image"})})]})}),Object(l.jsx)("div",{className:"testimonials-item",children:Object(l.jsxs)("div",{className:"row align-items-center",children:[Object(l.jsxs)("div",{className:"col-lg-8 col-md-12",children:[Object(l.jsx)("p",{children:"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore."}),Object(l.jsx)("h3",{children:"David Malan"}),Object(l.jsx)("span",{children:"Developer"})]}),Object(l.jsx)("div",{className:"col-lg-4 col-md-12 text-center",children:Object(l.jsx)("img",{src:"/images/user9.png",alt:"image"})})]})}),Object(l.jsx)("div",{className:"testimonials-item",children:Object(l.jsxs)("div",{className:"row align-items-center",children:[Object(l.jsxs)("div",{className:"col-lg-8 col-md-12",children:[Object(l.jsx)("p",{children:"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore."}),Object(l.jsx)("h3",{children:"Sarah Taylor"}),Object(l.jsx)("span",{children:"PHP Developer"})]}),Object(l.jsx)("div",{className:"col-lg-4 col-md-12 text-center",children:Object(l.jsx)("img",{src:"/images/user8.png",alt:"image"})})]})})]})):""]})})},w=function(){return Object(l.jsxs)("div",{className:"get-instant-courses-area-two bg-f9fbff",children:[Object(l.jsx)("div",{className:"container",children:Object(l.jsxs)("div",{className:"row align-items-center",children:[Object(l.jsx)("div",{className:"col-lg-7 col-md-12",children:Object(l.jsxs)("div",{className:"get-instant-courses-content-style-two",children:[Object(l.jsx)("span",{className:"sub-title",children:"GET INSTANT ACCESS TO THE FREE"}),Object(l.jsx)("h2",{children:"Self Development Course"}),Object(l.jsx)("p",{children:"With The Open University you can study whenever and wherever you choose. We have students in over 128 countries, and a global reputation as a pioneer in the field of flexible learning. Our flexible teaching also means, if you travel often or need to relocate, you can continue to study wherever you go."}),Object(l.jsx)(d.a,{href:"/authentication",children:Object(l.jsxs)("a",{className:"default-btn",children:[Object(l.jsx)("i",{className:"flaticon-user"}),"Start For Free",Object(l.jsx)("span",{})]})})]})}),Object(l.jsx)("div",{className:"col-lg-5 col-md-12",children:Object(l.jsx)("div",{className:"get-instant-courses-image-style-two",children:Object(l.jsx)("img",{src:"/images/setting.png",alt:"image"})})})]})}),Object(l.jsx)("div",{className:"bulb",children:Object(l.jsx)("img",{src:"/images/bulb2.png",alt:"image"})})]})};function k(e,s){var t=Object.keys(e);if(Object.getOwnPropertySymbols){var c=Object.getOwnPropertySymbols(e);s&&(c=c.filter((function(s){return Object.getOwnPropertyDescriptor(e,s).enumerable}))),t.push.apply(t,c)}return t}function E(e){for(var s=1;s<arguments.length;s++){var t=null!=arguments[s]?arguments[s]:{};s%2?k(Object(t),!0).forEach((function(s){Object(h.a)(e,s,t[s])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(t)):k(Object(t)).forEach((function(s){Object.defineProperty(e,s,Object.getOwnPropertyDescriptor(t,s))}))}return e}var S=p()((function(){return t.e(3).then(t.t.bind(null,"Rst5",7))}),{loadableGenerated:{webpack:function(){return["Rst5"]},modules:["react-owl-carousel3"]}}),P={loop:!0,nav:!1,dots:!1,autoplayHoverPause:!0,autoplay:!0,margin:30,navText:["<i class='bx bx-chevron-left'></i>","<i class='bx bx-chevron-right'></i>"],responsive:{0:{items:2},576:{items:3},768:{items:4},1200:{items:5}}},L=function(){var e=r.a.useState(!1),s=Object(O.a)(e,2),t=s[0],c=s[1];return r.a.useEffect((function(){c(!0)}),[]),Object(l.jsx)("div",{className:"partner-area ptb-100",children:Object(l.jsx)("div",{className:"container",children:t?Object(l.jsxs)(S,E(E({className:"partner-slides owl-carousel owl-theme"},P),{},{children:[Object(l.jsx)("div",{className:"partner-item",children:Object(l.jsx)("img",{src:"/images/partner/img13.png",alt:"image"})}),Object(l.jsx)("div",{className:"partner-item",children:Object(l.jsx)("img",{src:"/images/partner/img14.png",alt:"image"})}),Object(l.jsx)("div",{className:"partner-item",children:Object(l.jsx)("img",{src:"/images/partner/img15.png",alt:"image"})}),Object(l.jsx)("div",{className:"partner-item",children:Object(l.jsx)("img",{src:"/images/partner/img16.png",alt:"image"})}),Object(l.jsx)("div",{className:"partner-item",children:Object(l.jsx)("img",{src:"/images/partner/img17.png",alt:"image"})})]})):""})})},D=t("60Bi"),_=t.n(D),C=function(){var e=r.a.useState(!0),s=Object(O.a)(e,2),t=s[0],c=s[1];return Object(l.jsxs)(l.Fragment,{children:[Object(l.jsx)("div",{className:"video-area",children:Object(l.jsx)("div",{className:"container",children:Object(l.jsxs)("div",{className:"video-box mt-0",children:[Object(l.jsx)("div",{className:"image",children:Object(l.jsx)("img",{src:"/images/video-img2.jpg",className:"shadow",alt:"image"})}),Object(l.jsx)(d.a,{href:"#",children:Object(l.jsx)("a",{onClick:function(e){e.preventDefault(),c(!t)},className:"video-btn popup-youtube",children:Object(l.jsx)("i",{className:"flaticon-play"})})})]})})}),Object(l.jsx)(_.a,{channel:"youtube",isOpen:!t,videoId:"bk7McNUjWgw",onClose:function(){return c(!t)}})]})},F=function(){return Object(l.jsx)("div",{className:"funfacts-area-three bg-fff8f8 pt-100 pb-70",children:Object(l.jsx)("div",{className:"container",children:Object(l.jsxs)("div",{className:"row",children:[Object(l.jsx)("div",{className:"col-lg-3 col-md-3 col-sm-3 col-6",children:Object(l.jsx)("div",{className:"funfacts-box",children:Object(l.jsxs)("div",{className:"content",children:[Object(l.jsx)("h3",{children:Object(l.jsx)("span",{className:"odometer",children:"3279"})}),Object(l.jsx)("p",{children:"Enrolled Learners"})]})})}),Object(l.jsx)("div",{className:"col-lg-3 col-md-3 col-sm-3 col-6",children:Object(l.jsx)("div",{className:"funfacts-box",children:Object(l.jsxs)("div",{className:"content",children:[Object(l.jsx)("h3",{children:Object(l.jsx)("span",{className:"odometer",children:"250"})}),Object(l.jsx)("p",{children:"Online Instructors"})]})})}),Object(l.jsx)("div",{className:"col-lg-3 col-md-3 col-sm-3 col-6",children:Object(l.jsx)("div",{className:"funfacts-box",children:Object(l.jsxs)("div",{className:"content",children:[Object(l.jsx)("h3",{children:Object(l.jsx)("span",{className:"odometer",children:"1926"})}),Object(l.jsx)("p",{children:"Finished Sessions"})]})})}),Object(l.jsx)("div",{className:"col-lg-3 col-md-3 col-sm-3 col-6",children:Object(l.jsx)("div",{className:"funfacts-box",children:Object(l.jsxs)("div",{className:"content",children:[Object(l.jsxs)("h3",{children:[Object(l.jsx)("span",{className:"odometer",children:"100"}),"%"]}),Object(l.jsx)("p",{children:"Satisfaction Rate"})]})})})]})})})},T=function(){return Object(l.jsx)("div",{className:"blog-area ptb-100",children:Object(l.jsxs)("div",{className:"container",children:[Object(l.jsxs)("div",{className:"section-title",children:[Object(l.jsx)("span",{className:"sub-title",children:"News and Blogs"}),Object(l.jsx)("h2",{children:"Check Out Our Latest Blog"}),Object(l.jsx)("p",{children:"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."})]}),Object(l.jsxs)("div",{className:"row justify-content-center",children:[Object(l.jsx)("div",{className:"col-lg-4 col-md-6",children:Object(l.jsxs)("div",{className:"single-blog-post",children:[Object(l.jsx)("div",{className:"post-image",children:Object(l.jsx)(d.a,{href:"/single-blog-1",children:Object(l.jsx)("a",{className:"d-block",children:Object(l.jsx)("img",{src:"/images/blog/img16.jpg",alt:"image"})})})}),Object(l.jsxs)("div",{className:"post-content",children:[Object(l.jsx)(d.a,{href:"#",children:Object(l.jsx)("a",{className:"category",children:"Education"})}),Object(l.jsx)("h3",{children:Object(l.jsx)(d.a,{href:"/single-blog-1",children:Object(l.jsx)("a",{children:"University Admissions Could Face Emergency Controls"})})}),Object(l.jsxs)("ul",{className:"post-content-footer d-flex justify-content-between align-items-center",children:[Object(l.jsx)("li",{children:Object(l.jsxs)("div",{className:"post-author d-flex align-items-center",children:[Object(l.jsx)("img",{src:"/images/user1.jpg",className:"rounded-circle",alt:"image"}),Object(l.jsx)("span",{children:"Alex Morgan"})]})}),Object(l.jsxs)("li",{children:[Object(l.jsx)("i",{className:"flaticon-calendar"})," Feb 22, 2021"]})]})]})]})}),Object(l.jsx)("div",{className:"col-lg-4 col-md-6",children:Object(l.jsxs)("div",{className:"single-blog-post",children:[Object(l.jsx)("div",{className:"post-image",children:Object(l.jsx)(d.a,{href:"/single-blog-1",children:Object(l.jsx)("a",{className:"d-block",children:Object(l.jsx)("img",{src:"/images/blog/img17.jpg",alt:"image"})})})}),Object(l.jsxs)("div",{className:"post-content",children:[Object(l.jsx)(d.a,{href:"#",children:Object(l.jsx)("a",{className:"category",children:"Online"})}),Object(l.jsx)("h3",{children:Object(l.jsx)(d.a,{href:"/single-blog-1",children:Object(l.jsx)("a",{children:"Online Learning Can Prepare Students For A Fast-Changing"})})}),Object(l.jsxs)("ul",{className:"post-content-footer d-flex justify-content-between align-items-center",children:[Object(l.jsx)("li",{children:Object(l.jsxs)("div",{className:"post-author d-flex align-items-center",children:[Object(l.jsx)("img",{src:"/images/user2.jpg",className:"rounded-circle",alt:"image"}),Object(l.jsx)("span",{children:"Sarah Taylor"})]})}),Object(l.jsxs)("li",{children:[Object(l.jsx)("i",{className:"flaticon-calendar"})," Feb 25, 2021"]})]})]})]})}),Object(l.jsx)("div",{className:"col-lg-4 col-md-6",children:Object(l.jsxs)("div",{className:"single-blog-post",children:[Object(l.jsx)("div",{className:"post-image",children:Object(l.jsx)(d.a,{href:"/single-blog-1",children:Object(l.jsx)("a",{className:"d-block",children:Object(l.jsx)("img",{src:"/images/blog/img18.jpg",alt:"image"})})})}),Object(l.jsxs)("div",{className:"post-content",children:[Object(l.jsx)(d.a,{href:"#",children:Object(l.jsx)("a",{className:"category",children:"Learning"})}),Object(l.jsx)("h3",{children:Object(l.jsx)(d.a,{href:"/single-blog-1",children:Object(l.jsx)("a",{children:"As Learning Moves Online, Trigger Warnings Must Too"})})}),Object(l.jsxs)("ul",{className:"post-content-footer d-flex justify-content-between align-items-center",children:[Object(l.jsx)("li",{children:Object(l.jsxs)("div",{className:"post-author d-flex align-items-center",children:[Object(l.jsx)("img",{src:"/images/user3.jpg",className:"rounded-circle",alt:"image"}),Object(l.jsx)("span",{children:"David Warner"})]})}),Object(l.jsxs)("li",{children:[Object(l.jsx)("i",{className:"flaticon-calendar"})," Feb 28, 2021"]})]})]})]})}),Object(l.jsx)("div",{className:"col-lg-12 col-md-12",children:Object(l.jsx)("div",{className:"blog-post-info",children:Object(l.jsxs)("p",{children:["Get into details now?\u200b "," ",Object(l.jsx)(d.a,{href:"/blog-1",children:Object(l.jsx)("a",{children:"View all posts"})})]})})})]})]})})},R=function(){return Object(l.jsxs)("div",{children:[Object(l.jsxs)("div",{className:"view-all-courses-area-three bg-fff8f8",children:[Object(l.jsx)("div",{className:"container",children:Object(l.jsxs)("div",{className:"row align-items-center",children:[Object(l.jsx)("div",{className:"col-lg-6 col-md-12",children:Object(l.jsx)("div",{className:"view-all-courses-image-style-two",children:Object(l.jsx)("img",{src:"/images/strategy.png",alt:"image"})})}),Object(l.jsx)("div",{className:"col-lg-6 col-md-12",children:Object(l.jsxs)("div",{className:"view-all-courses-content-style-two",children:[Object(l.jsx)("span",{className:"sub-title",children:"DISTANCE LEARNING"}),Object(l.jsx)("h2",{children:"Get ahead with Learning Paths. Stay Sharp."}),Object(l.jsx)("p",{children:"With The Open University you can study whenever and wherever you choose. We have students in over 128 countries, and a global reputation as a pioneer in the field of flexible learning. Our flexible teaching also means, if you travel often or need to relocate, you can continue to study wherever you go."}),Object(l.jsx)(d.a,{href:"/courses-1",children:Object(l.jsxs)("a",{className:"default-btn",children:[Object(l.jsx)("i",{className:"flaticon-agenda"}),"View Courses",Object(l.jsx)("span",{})]})})]})})]})}),Object(l.jsx)("div",{className:"bulb",children:Object(l.jsx)("img",{src:"/images/bulb.png",alt:"image"})})]}),Object(l.jsx)("div",{className:"premium-access-area-two",children:Object(l.jsx)("div",{className:"container",children:Object(l.jsxs)("div",{className:"row align-items-center",children:[Object(l.jsx)("div",{className:"col-lg-6 col-md-12",children:Object(l.jsxs)("div",{className:"premium-access-content-style-two",children:[Object(l.jsx)("span",{className:"sub-title",children:"GO AT YOUR OWN PACE"}),Object(l.jsx)("h2",{children:"Give Their Limitless Potential Unlimited Access"}),Object(l.jsx)("p",{children:"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."}),Object(l.jsx)(d.a,{href:"/membership-levels",children:Object(l.jsxs)("a",{className:"default-btn",children:[Object(l.jsx)("i",{className:"flaticon-user"}),"Get Started Now",Object(l.jsx)("span",{})]})})]})}),Object(l.jsx)("div",{className:"col-lg-6 col-md-12",children:Object(l.jsx)("div",{className:"premium-access-image-style-two",children:Object(l.jsx)("img",{src:"/images/security.png",alt:"image"})})})]})})})]})},V=t("vDqi"),I=t.n(V),A=t("rjN7"),U=function(e){var s=e.courses;return Object(l.jsxs)(r.a.Fragment,{children:[Object(l.jsx)(j,{}),Object(l.jsx)(m,{}),Object(l.jsx)(b,{courses:s}),Object(l.jsx)(u,{}),Object(l.jsx)(y,{}),Object(l.jsx)(w,{}),Object(l.jsx)(L,{}),Object(l.jsx)(C,{}),Object(l.jsx)(F,{}),Object(l.jsx)(T,{}),Object(l.jsx)(R,{})]})};U.getInitialProps=Object(a.a)(i.a.mark((function e(){var s,t;return i.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return s="".concat(A.a,"/api/v1/courses/homepage-courses"),e.next=3,I.a.get(s);case 3:return t=e.sent,e.abrupt("return",t.data);case 5:case"end":return e.stop()}}),e)})));s.default=U},vlRD:function(e,s,t){(window.__NEXT_P=window.__NEXT_P||[]).push(["/",function(){return t("RNiq")}])}},[["vlRD",0,2,1,4,5,6]]]);