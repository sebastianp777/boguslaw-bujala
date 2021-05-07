/*------------------------------------*\
    Presetting
\*------------------------------------*/
*,
*:after,
*:before {
  margin: 0;
  list-style: none;
  text-decoration: none;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -ms-box-sizing: border-box;
  box-sizing: border-box;
  border: 0;
  outline: 0;
  font-family: inherit; }

html, body {
  font-family: 'Poppins', sans-serif;
  overflow-x: hidden;
  max-width: 1920px;
  margin: 0 auto;
  position: relative;
  font-size: 16px;
  scroll-behavior: smooth; }

img {
  max-width: 100%; }

a:focus {
  outline: unset; }

.header {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 10;
  width: 100%;
  height: auto;
  border-top: 4px solid #623b29; }
  .header .nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    max-width: 1156px;
    margin: 0 auto; }
    .header .nav__logo {
      margin-bottom: -20px; }
    .header .nav__menu {
      display: flex;
      align-items: center; }
      .header .nav__menu ul {
        display: flex;
        justify-content: space-between;
        padding-inline-start: 0px;
        font-family: FiraSans-Regular;
        font-size: 15px;
        font-weight: normal; }
        .header .nav__menu ul li {
          padding: 5px 12px; }
      .header .nav__menu .home-icon-a {
        display: flex; }
      .header .nav__menu .menu-item {
        position: relative; }
        .header .nav__menu .menu-item a {
          color: #623b29; }
        .header .nav__menu .menu-item:hover {
          background: #ede7e5; }
        .header .nav__menu .menu-item .sub-menu {
          display: none;
          position: absolute;
          top: 38px;
          left: 0;
          background-color: #ede7e5;
          padding: 10px 20px; }
          .header .nav__menu .menu-item .sub-menu::before {
            content: '';
            position: absolute;
            top: -10px;
            left: 12px;
            width: 0;
            height: 0;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-bottom: 10px solid #ede7e5; }
        .header .nav__menu .menu-item.pll-parent-menu-item:hover .sub-menu {
          display: block; }
          .header .nav__menu .menu-item.pll-parent-menu-item:hover .sub-menu li:hover {
            color: red; }
      .header .nav__menu .search-icon {
        margin-right: 25px; }
    .header .nav_homepage {
      padding: 5px 12px; }

.home .header {
  background: rgba(0, 0, 0, 0.6);
  border-top: unset; }
  .home .header .nav_homepage {
    background: #ede7e5;
    margin-right: 10px; }
  .home .header .nav__menu .menu-item a {
    color: #fff; }
  .home .header .nav__menu .menu-item:hover {
    background: #ede7e5; }
    .home .header .nav__menu .menu-item:hover a {
      color: #623b29; }

.homepage-top-slider {
  height: 100vh;
  /* Fallback for browsers that do not support Custom Properties */
  height: calc(var(--vh, 1vh) * 100);
  width: 100%;
  position: relative;
  min-height: 600px; }
  @media only screen and (max-width: 767px) {
    .homepage-top-slider {
      min-height: 500px; } }
  .homepage-top-slider .swiper-container {
    width: 100%;
    height: 100%;
    position: relative; }
    .homepage-top-slider .swiper-container .swiper-slide {
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
      justify-content: left; }
      .homepage-top-slider .swiper-container .swiper-slide .container {
        width: 100%; }
      .homepage-top-slider .swiper-container .swiper-slide .slide-content-wrapper .slide-header {
        font-family: FiraSans-SemiBold;
        font-style: normal;
        font-weight: 500;
        font-size: 44px;
        line-height: 54px;
        color: #FFFFFF;
        text-align: left; }
      .homepage-top-slider .swiper-container .swiper-slide .scroll-down {
        position: absolute;
        bottom: 20%;
        left: 0;
        right: 0;
        text-align: center; }
    .homepage-top-slider .swiper-container .slider-down-box-content {
      width: 100%;
      display: flex;
      justify-content: center;
      z-index: 2;
      height: 118px;
      position: absolute;
      bottom: 0;
      background: rgba(0, 0, 0, 0.6); }
      .homepage-top-slider .swiper-container .slider-down-box-content__div {
        display: flex;
        align-items: center; }
        .homepage-top-slider .swiper-container .slider-down-box-content__div p {
          margin-left: 20px;
          max-width: 220px;
          color: #fff;
          font-size: 20px;
          line-height: 28px;
          font-family: FiraSans-Regular; }
          .homepage-top-slider .swiper-container .slider-down-box-content__div p a {
            font-family: FiraSans-Bold;
            text-decoration: underline; }
      .homepage-top-slider .swiper-container .slider-down-box-content .ctr {
        display: flex;
        justify-content: space-between;
        z-index: 1;
        width: 60%; }

.homepage-secret {
  height: 375px;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #fafaf6;
  position: relative; }
  .homepage-secret h2 {
    color: #613a29;
    font-size: 32px;
    font-family: FiraSans-Bold;
    text-align: center;
    margin-bottom: 55px; }
  .homepage-secret .secret_div {
    text-align: center; }
    .homepage-secret .secret_div p {
      max-width: 210px;
      font-family: FiraSans-Medium;
      margin: 16px auto 0; }
  .homepage-secret .container .row {
    width: 1156px;
    justify-content: space-between; }
  .homepage-secret .leaf-homepage-top {
    position: absolute;
    bottom: -20%;
    right: 5%; }

.homepage-news {
  position: relative; }
  .homepage-news .tomato-homepage {
    position: absolute;
    right: 0;
    bottom: 30%; }
  .homepage-news__bg {
    background: #613a29;
    height: 270px;
    position: absolute;
    width: 100%;
    z-index: -1; }
  .homepage-news h2 {
    color: #fff;
    padding: 83px 0 42px;
    font-size: 36px;
    font-family: FiraSans-Bold; }
    .homepage-news h2::after {
      opacity: 0.2; }

.homepage-where-buy {
  position: relative; }
  .homepage-where-buy .where-buy-homepage {
    position: absolute;
    left: 0;
    top: -40%; }
  .homepage-where-buy .div-h2 {
    display: flex;
    align-items: center; }
    .homepage-where-buy .div-h2::after {
      content: "";
      background: #ede7e5;
      width: 75%;
      height: 1px;
      display: block;
      margin-left: auto; }
  .homepage-where-buy .heading-with-icon {
    font-size: 36px;
    font-family: FiraSans-Bold;
    color: #613a29; }
  .homepage-where-buy .row .where_buy_logos {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    height: 235px;
    position: relative; }
    .homepage-where-buy .row .where_buy_logos__div img {
      width: 78%; }
    .homepage-where-buy .row .where_buy_logos::after {
      content: "";
      background: #ede7e5;
      width: 1px;
      height: 119%;
      display: block;
      position: absolute;
      right: 0; }
  .homepage-where-buy .btn {
    width: 193px; }
  .homepage-where-buy .btn-div {
    margin: 0 auto;
    display: flex;
    align-items: center;
    margin-bottom: 50px; }
    .homepage-where-buy .btn-div::after {
      content: "";
      background: #ede7e5;
      width: 35%;
      height: 1px;
      display: block;
      margin-left: auto;
      position: absolute;
      right: 0; }
  .homepage-where-buy .container {
    position: relative; }

.about-us-template {
  position: relative; }
  .about-us-template .leaves-about {
    position: absolute;
    right: 0;
    top: -3%; }
  .about-us-template .first-section {
    display: flex; }
    .about-us-template .first-section__div {
      position: relative; }
      .about-us-template .first-section__div--text {
        max-width: 400px; }
        .about-us-template .first-section__div--text span {
          font-family: FiraSans-Regular;
          font-size: 14px;
          line-height: 16px;
          color: #8a8a8a; }
        .about-us-template .first-section__div--text h3 {
          font-family: FiraSans-Bold;
          font-size: 24px;
          line-height: 32px;
          color: #623b29;
          margin: 2px 0 16px; }
        .about-us-template .first-section__div--text p {
          color: #333333;
          font-family: FiraSans-Regular;
          font-size: 14px;
          line-height: 26px; }
      .about-us-template .first-section__div__bg-color {
        background: #ede7e5;
        width: 895px;
        height: 310px;
        position: absolute;
        bottom: -20%;
        z-index: -1; }
    .about-us-template .first-section:nth-of-type(2) {
      justify-content: flex-end;
      margin-top: 27px; }
      .about-us-template .first-section:nth-of-type(2) .first-section__div {
        margin-bottom: 180px; }
        .about-us-template .first-section:nth-of-type(2) .first-section__div--text {
          max-width: 370px;
          margin: 50px 56px 0 0; }
          .about-us-template .first-section:nth-of-type(2) .first-section__div--text::before {
            content: url("img/about-us/basil.png");
            position: absolute;
            left: -40%;
            top: -4%; }
        .about-us-template .first-section:nth-of-type(2) .first-section__div__bg-color {
          right: 0; }
    .about-us-template .first-section:nth-of-type(3) {
      justify-content: flex-start; }
      .about-us-template .first-section:nth-of-type(3) .first-section__div {
        margin-bottom: 180px; }
        .about-us-template .first-section:nth-of-type(3) .first-section__div--text {
          max-width: 440px;
          margin: 40px 0 0 56px; }
          .about-us-template .first-section:nth-of-type(3) .first-section__div--text::before {
            content: url("img/about-us/yellow-paprika.png");
            position: absolute;
            right: -40%;
            top: -8%; }
        .about-us-template .first-section:nth-of-type(3) .first-section__div__bg-color {
          left: 0; }
    .about-us-template .first-section:nth-of-type(4) {
      justify-content: flex-end; }
      .about-us-template .first-section:nth-of-type(4) .first-section__div {
        margin-bottom: 170px; }
        .about-us-template .first-section:nth-of-type(4) .first-section__div--text {
          max-width: 315px;
          margin: 42px 70px 0 0; }
          .about-us-template .first-section:nth-of-type(4) .first-section__div--text::before {
            content: url("img/about-us/tomato.png");
            position: absolute;
            left: -60%;
            top: -12%; }
        .about-us-template .first-section:nth-of-type(4) .first-section__div__bg-color {
          right: 0; }
    .about-us-template .first-section:nth-of-type(5) {
      justify-content: flex-end;
      align-items: center; }
      .about-us-template .first-section:nth-of-type(5) .first-section__div--text {
        max-width: 480px;
        margin-right: 60px; }
        .about-us-template .first-section:nth-of-type(5) .first-section__div--text .heading-img {
          display: flex;
          flex-direction: column; }
          .about-us-template .first-section:nth-of-type(5) .first-section__div--text .heading-img::before {
            content: url("img/about-us/icon-1.svg");
            position: absolute; }
        .about-us-template .first-section:nth-of-type(5) .first-section__div--text span, .about-us-template .first-section:nth-of-type(5) .first-section__div--text h3 {
          margin-left: 55px; }
    .about-us-template .first-section:nth-of-type(6) {
      justify-content: flex-start;
      align-items: center; }
      .about-us-template .first-section:nth-of-type(6) .first-section__div--text {
        max-width: 480px;
        margin-left: 92px; }
      .about-us-template .first-section:nth-of-type(6) .first-section__div h3 {
        margin-left: 55px;
        display: flex;
        align-items: center; }
        .about-us-template .first-section:nth-of-type(6) .first-section__div h3::before {
          content: url("img/about-us/icon-2.svg");
          position: absolute;
          left: 0; }

.about-us-support {
  background: #fafaf6;
  height: 340px;
  position: relative;
  padding: 70px 0; }
  .about-us-support .leaves-about {
    position: absolute;
    bottom: -18%; }
  .about-us-support__ctr {
    display: flex;
    justify-content: space-between; }
    .about-us-support__ctr .icon-section {
      display: flex;
      align-items: flex-start; }
      .about-us-support__ctr .icon-section p {
        max-width: 216px;
        margin-left: 12px;
        font-size: 14px; }
  .about-us-support h3 {
    color: #623b29;
    margin-bottom: 43px;
    font-family: FiraSans-Bold;
    font-size: 24px; }

.about-us-awards {
  position: relative;
  margin-top: 83px; }
  .about-us-awards .tomato-about {
    position: absolute;
    bottom: -18%;
    right: 0; }
  .about-us-awards__ctr {
    display: flex;
    justify-content: space-between; }
    .about-us-awards__ctr .icon-section {
      display: flex;
      align-items: center; }
      .about-us-awards__ctr .icon-section img {
        margin-right: 30px; }
      .about-us-awards__ctr .icon-section--data {
        text-align: center; }
        .about-us-awards__ctr .icon-section--data h6 {
          color: #623b29;
          font-size: 18px;
          line-height: 26px;
          font-family: FiraSans-SemiBold; }
        .about-us-awards__ctr .icon-section--data p {
          font-size: 14px; }
  .about-us-awards h3 {
    color: #623b29;
    margin-bottom: 43px;
    font-family: FiraSans-Bold;
    font-size: 24px; }
  .about-us-awards .btn {
    width: 195px;
    margin: 60px auto; }
  .about-us-awards h2 {
    color: #613a29;
    font-size: 36px;
    font-family: FiraSans-Bold;
    margin-bottom: 62px; }

.about-us-certificates .leaves-about {
  position: absolute;
  bottom: -18%; }
.about-us-certificates__ctr {
  display: flex;
  justify-content: space-between; }
  .about-us-certificates__ctr .icon-section p {
    text-align: center;
    font-size: 18px;
    color: #623b29;
    font-family: FiraSans-SemiBold;
    margin-top: 30px; }
  .about-us-certificates__ctr .icon-section:hover p {
    color: #e9501b; }
.about-us-certificates h2 {
  color: #613a29;
  font-size: 36px;
  font-family: FiraSans-Bold;
  margin-bottom: 62px; }
.about-us-certificates a {
  width: 193px;
  margin: 40px auto 64px; }

.contact-form-template {
  position: relative; }
  .contact-form-template .contact-btn {
    margin-left: 15px; }
    .contact-form-template .contact-btn input {
      background: #e9501b;
      color: #fff;
      width: 200px;
      height: 54px;
      border: 1px solid #e9501b; }
      .contact-form-template .contact-btn input:hover {
        color: #e9501b;
        background: #fff; }
  .contact-form-template__div__data h3 {
    color: #623b29;
    font-family: FiraSans-Bold;
    font-size: 24px; }
  .contact-form-template__div__data p {
    color: #8a8a8a;
    margin: 8px 0 40px; }
  .contact-form-template__div__data h6 {
    color: #623b29;
    font-family: FiraSans-SemiBold;
    font-size: 18px;
    margin-bottom: 30px; }
  .contact-form-template__div__data a {
    color: #e9501b;
    font-family: FiraSans-Regular;
    margin-bottom: 12px;
    display: block; }
  .contact-form-template__div__data .social-icons {
    display: flex;
    margin-top: 30px; }
    .contact-form-template__div__data .social-icons a {
      margin-left: 6px; }
  .contact-form-template .rosemar-img {
    position: absolute;
    left: 0;
    bottom: -5%; }

.our-brands-template {
  position: relative; }
  .our-brands-template .leaves-brands {
    position: absolute;
    right: 0;
    top: -3%; }
  .our-brands-template .our-brands__info-section {
    padding: 65px 0; }
    .our-brands-template .our-brands__info-section__ctr {
      display: flex;
      align-items: center; }
    .our-brands-template .our-brands__info-section__div p {
      line-height: 26px;
      max-width: 95%;
      margin: 16px 0 12px; }
    .our-brands-template .our-brands__info-section__div a {
      color: #e9501b;
      position: relative; }
      .our-brands-template .our-brands__info-section__div a:hover {
        color: #623b29; }
      .our-brands-template .our-brands__info-section__div a:hover::after {
        background: #623b29; }
      .our-brands-template .our-brands__info-section__div a:after {
        content: '';
        position: absolute;
        bottom: -9px;
        left: 0;
        width: 100%;
        height: 1px;
        background: #e9501b;
        cursor: pointer; }
    .our-brands-template .our-brands__info-section:nth-child(2n+2) {
      background: #fafaf6; }
  .our-brands-template .brands_why_our_products {
    display: flex;
    justify-content: space-evenly; }
    .our-brands-template .brands_why_our_products__div {
      display: flex;
      flex-direction: column;
      margin: 48px 0 40px; }
      .our-brands-template .brands_why_our_products__div p {
        margin-top: 19px;
        color: #623b29;
        font-family: FiraSans-SemiBold; }
    .our-brands-template .brands_why_our_products h2 {
      color: #613a29;
      font-size: 32px;
      font-family: FiraSans-Bold;
      text-align: center;
      margin-bottom: 55px; }
  .our-brands-template .our-products-brands {
    position: relative; }
    .our-brands-template .our-products-brands a {
      width: 233px;
      margin-bottom: 50px; }
    .our-brands-template .our-products-brands .rosemar {
      position: absolute;
      left: 0;
      bottom: 0; }

.where-buy-template {
  position: relative; }
  .where-buy-template .leaves-brands {
    position: absolute;
    right: 0;
    top: -7%; }
  .where-buy-template p {
    line-height: 26px;
    color: #333333;
    margin: 26px 0 48px; }
  .where-buy-template .where_buy_logos {
    display: flex;
    flex-wrap: wrap; }
    .where-buy-template .where_buy_logos__div {
      width: 25%;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 80px; }
  .where-buy-template__last-section .ctr {
    display: flex;
    justify-content: center;
    height: 118px;
    padding: 20px;
    background: #fafaf6;
    width: 718px;
    margin: 0 auto 50px; }
    .where-buy-template__last-section .ctr__div {
      display: flex;
      justify-content: center;
      align-items: center; }
      .where-buy-template__last-section .ctr__div a {
        color: #e9501b;
        font-family: FiraSans-Bold; }
      .where-buy-template__last-section .ctr__div p {
        max-width: 200px;
        margin: auto 0 auto 26px; }
  .where-buy-template .rosemar {
    position: absolute;
    bottom: 0;
    left: 0; }

.contact-form-template {
  margin-bottom: 0 !important; }
  .contact-form-template .row {
    justify-content: space-between; }
  .contact-form-template .leaves-brands {
    position: absolute;
    right: 0;
    top: -25%; }
  .contact-form-template_cont.contact-page {
    margin-top: 36px; }
    .contact-form-template_cont.contact-page .contact-form-template__div__data {
      background: #fafaf6;
      padding: 40px 30px; }
      .contact-form-template_cont.contact-page .contact-form-template__div__data h6 {
        color: #8a8a8a;
        font-size: 16px;
        margin: 8px 0 16px;
        font-family: FiraSans-Regular;
        font-weight: normal; }
      .contact-form-template_cont.contact-page .contact-form-template__div__data span {
        display: block;
        margin-bottom: 8px;
        color: #333333; }
      .contact-form-template_cont.contact-page .contact-form-template__div__data a.contact-a-email {
        margin-top: 16px; }
  .contact-form-template_cont .complaint__content {
    margin: 50px 0; }
    .contact-form-template_cont .complaint__content h3 {
      color: #623b29;
      margin-bottom: 16px;
      font-family: FiraSans-Bold;
      font-size: 24px; }
    .contact-form-template_cont .complaint__content p {
      color: #252525; }
    .contact-form-template_cont .complaint__content a {
      width: 190px;
      margin: 24px 0 54px; }
  .contact-form-template .contact__map {
    position: relative; }
    .contact-form-template .contact__map iframe {
      width: 100%; }
  .contact-form-template .rosemar-img {
    bottom: 6%; }
  .contact-form-template .garlic-img {
    position: absolute;
    top: -15%;
    right: 0; }

.career-template {
  position: relative; }
  .career-template .leaves-brands {
    position: absolute;
    right: 0;
    top: -5%; }
  .career-template .breadcrumbs {
    margin-bottom: 30px; }
  .career-template .career__content h3 {
    color: #623b29;
    font-size: 28px;
    font-family: FiraSans-Bold;
    margin-bottom: 16px; }
  .career-template .career__content__div {
    display: flex;
    align-items: flex-end;
    justify-content: space-between; }
    .career-template .career__content__div p {
      max-width: 450px;
      line-height: 26px; }
    .career-template .career__content__div a {
      color: #e9501b;
      position: relative; }
      .career-template .career__content__div a:hover {
        color: #623b29; }
      .career-template .career__content__div a:hover::after {
        background: #623b29; }
      .career-template .career__content__div a:after {
        content: '';
        position: absolute;
        bottom: -9px;
        left: 0;
        width: 100%;
        height: 1px;
        background: #e9501b;
        cursor: pointer; }
  .career-template .career_posts_data {
    margin-bottom: 30px;
    background: #fafaf6;
    padding: 40px 30px; }
  .career-template__contact {
    background: #fafaf6;
    margin-top: 40px;
    padding: 50px 0 100px;
    position: relative; }
    .career-template__contact .ctr {
      display: flex; }
    .career-template__contact h3 {
      font-size: 24px;
      color: #623b29; }
    .career-template__contact p {
      color: #8a8a8a;
      margin: 10px 0 26px;
      line-height: 24px; }
    .career-template__contact .col-md-6-padding {
      padding-right: 0 !important;
      padding-left: 0 !important; }
    .career-template__contact .career-img-bg {
      position: absolute;
      right: 0;
      top: -5%; }
    .career-template__contact .rosemar {
      position: absolute;
      left: 0;
      bottom: 5%; }
  .career-template .wpcf7-form-control-wrap {
    background: transparent !important; }

.single-career-template {
  position: relative; }
  .single-career-template .leaves-brands {
    position: absolute;
    right: 0;
    top: -20%; }
  .single-career-template .single-career {
    background: #fafaf6;
    padding: 40px 25px 20px;
    margin: 36px 0 50px; }
    .single-career-template .single-career h3 {
      color: #623b29;
      font-size: 28px;
      line-height: 32px;
      font-family: FiraSans-Bold;
      margin-bottom: 32px; }
    .single-career-template .single-career h4 {
      color: #623b29;
      font-size: 18px;
      font-family: FiraSans-Bold;
      margin-bottom: 12px; }
    .single-career-template .single-career ul {
      padding-inline-start: 0px; }
      .single-career-template .single-career ul li {
        margin-bottom: 28px;
        color: #333333; }
        .single-career-template .single-career ul li::before {
          content: url("img/check.svg");
          margin-right: 10px; }
    .single-career-template .single-career__benefits {
      background: #623b29;
      height: 280px;
      display: flex;
      align-items: center;
      position: relative; }
      .single-career-template .single-career__benefits .leaves-brands {
        left: 0;
        top: -20%; }
      .single-career-template .single-career__benefits h3 {
        text-align: center;
        font-family: FiraSans-Bold;
        font-size: 24px;
        color: #fff;
        margin-bottom: 45px; }
      .single-career-template .single-career__benefits .heading-with-icon {
        text-align: center;
        color: #fff;
        padding-bottom: 50px; }
      .single-career-template .single-career__benefits .benefits_content {
        display: flex;
        justify-content: space-between;
        align-items: center; }
        .single-career-template .single-career__benefits .benefits_content__div {
          display: flex;
          flex-direction: column;
          max-width: 146px;
          text-align: center; }
          .single-career-template .single-career__benefits .benefits_content__div p {
            height: 38px;
            color: #fff;
            margin-top: 15px;
            line-height: 26px; }
      .single-career-template .single-career__benefits .container {
        width: 100%; }
    .single-career-template .single-career__send-cv {
      background: #fafaf6;
      padding: 50px 0;
      position: relative; }
      .single-career-template .single-career__send-cv .career-img-bg {
        position: absolute;
        right: 0;
        top: -8%; }
      .single-career-template .single-career__send-cv h3 {
        font-family: FiraSans-Bold;
        font-size: 24px;
        color: #623b29;
        margin-bottom: 10px; }
      .single-career-template .single-career__send-cv p {
        color: #8a8a8a;
        line-height: 24px; }
        .single-career-template .single-career__send-cv p a {
          color: #e9501b; }
      .single-career-template .single-career__send-cv h5 {
        font-size: 16px;
        color: #623b29;
        margin: 16px 0 5px; }
      .single-career-template .single-career__send-cv .contact-form {
        width: 75%; }
        .single-career-template .single-career__send-cv .contact-form .wpcf7-form-control-wrap {
          background: transparent; }
  .single-career-template .other_posts {
    padding: 73px 0 50px; }
    .single-career-template .other_posts h2 {
      font-size: 36px;
      font-family: FiraSans-Bold;
      color: #623b29;
      margin-bottom: 40px; }
    .single-career-template .other_posts .btn {
      width: 190px; }

.awards-template {
  position: relative; }
  .awards-template .leaves {
    position: absolute;
    right: 0;
    top: -2%; }
  .awards-template .awards-content {
    position: relative; }
    .awards-template .awards-content .ctr {
      display: flex;
      align-items: center;
      height: 260px; }
    .awards-template .awards-content__div--data {
      margin-left: 80px;
      width: 80%; }
      .awards-template .awards-content__div--data p {
        max-width: 90%;
        color: #333333;
        line-height: 26px; }
      .awards-template .awards-content__div--data h3 {
        color: #623b29;
        font-size: 24px;
        font-family: FiraSans-Bold;
        margin-bottom: 12px; }
    .awards-template .awards-content:nth-child(2n+2) {
      background: #fafaf6; }
      .awards-template .awards-content:nth-child(2n+2) .ctr {
        flex-direction: row-reverse;
        justify-content: flex-end; }
      .awards-template .awards-content:nth-child(2n+2) .awards-content__div--data {
        margin-left: 0px; }
    .awards-template .awards-content .leaves-first {
      position: absolute;
      left: 0;
      bottom: -25%;
      z-index: 1; }
    .awards-template .awards-content .garlic-middle {
      position: absolute;
      right: 0;
      bottom: -22%; }
    .awards-template .awards-content .rosemar-last {
      position: absolute;
      left: 0;
      bottom: 10%; }

.news-blog {
  position: relative; }
  .news-blog .search {
    display: none; }
  .news-blog .leaves-brands {
    position: absolute;
    right: 0;
    top: -8%; }
  .news-blog .h3-blog-posts {
    margin-bottom: 39px;
    color: #623b29;
    font-size: 24px; }
  .news-blog__loop article {
    max-width: 33.3%;
    width: 33.3%; }
    .news-blog__loop article img {
      width: 350px;
      height: 220px;
      object-fit: cover; }
    .news-blog__loop article h2 {
      height: 56px;
      margin: 2px 0 10px; }
      .news-blog__loop article h2 a {
        color: #333333;
        font-size: 20px;
        font-family: FiraSans-SemiBold;
        font-size: 20px;
        line-height: 28px; }
    .news-blog__loop article p {
      color: #8b8b8b;
      font-size: 14px;
      line-height: 32px; }
    .news-blog__loop article .loop-content-data {
      padding: 25px; }
  .news-blog__loop .last-news {
    max-width: 100%;
    width: 100%;
    display: flex;
    flex-direction: row-reverse;
    align-items: center;
    margin-top: 33px; }
    .news-blog__loop .last-news img {
      width: 705px;
      height: 400px; }
    .news-blog__loop .last-news .loop-content-data {
      padding: 0;
      max-width: 500px;
      margin: 0 auto; }

.single-news {
  position: relative; }
  .single-news article {
    margin-top: 50px; }
    .single-news article .leaf-top {
      position: absolute;
      left: 5%; }
  .single-news .leaves-brands {
    position: absolute;
    right: 0;
    top: -3%; }
  .single-news .garlic-img {
    position: absolute;
    left: 0;
    transform: rotate(180deg); }
  .single-news .text-with-image {
    display: flex;
    align-items: center;
    min-height: 420px;
    position: relative; }
    .single-news .text-with-image .wp-post-image {
      top: 0;
      position: absolute;
      right: -30%;
      width: 705px;
      height: 420px;
      object-fit: cover; }
  .single-news__date-time {
    display: flex;
    align-items: center; }
    .single-news__date-time .date {
      color: #8b8b8b;
      margin-right: 16px; }
    .single-news__date-time a {
      color: #8b8b8b;
      padding: 5px 10px;
      border: 1px solid #e2d6c8;
      border-radius: 18px;
      font-size: 12px; }
  .single-news h1 {
    margin: 8px 0 16px; }
    .single-news h1 a {
      color: #623b29;
      font-family: FiraSans-Bold;
      font-size: 28px; }
  .single-news p {
    color: #333333;
    line-height: 26px;
    text-align: justify; }
  .single-news .text-under-image {
    margin: 28px 0; }
  .single-news .heading-under-image {
    font-size: 24px;
    color: #623b29;
    font-family: FiraSans-Bold;
    margin-bottom: 16px; }
    .single-news .heading-under-image__video {
      margin-top: 60px;
      text-align: center;
      font-size: 28px; }
    .single-news .heading-under-image__gallery {
      margin: 60px 0 40px;
      color: #613a29;
      font-size: 28px; }
    .single-news .heading-under-image__other-posts {
      font-size: 36px;
      margin: 83px 0 42px; }
  .single-news .news-blog-list {
    padding-inline-start: 10px; }
    .single-news .news-blog-list li {
      margin-bottom: 24px; }
      .single-news .news-blog-list li::before {
        content: url("img/check.svg");
        margin-right: 10px; }
      .single-news .news-blog-list li:first-child {
        margin-top: 24px; }
  .single-news .news_video {
    display: flex;
    justify-content: center; }
  .single-news .news_gallery {
    display: flex;
    flex-wrap: wrap; }
    .single-news .news_gallery img {
      max-width: 255px;
      margin-bottom: 30px;
      margin-right: 30px; }
      .single-news .news_gallery img:nth-child(4n + 0) {
        margin-right: 0px; }

.product-template {
  position: relative; }
  .product-template .pepper-icon {
    position: absolute;
    right: 0;
    top: -10%; }
  .product-template .product__content {
    width: 30%;
    border: 1px solid #ede7e5;
    padding: 0px 30px 20px;
    margin: 80px 55px 50px 0; }
    .product-template .product__content:nth-child(3n + 0) {
      margin-right: 0; }
    .product-template .product__content .thumb-item-wrapper {
      text-align: center;
      position: relative; }
      .product-template .product__content .thumb-item-wrapper img {
        margin-top: -90px; }
      .product-template .product__content .thumb-item-wrapper span {
        position: absolute;
        top: 20%;
        background: #623b29;
        padding: 10px;
        font-size: 14px; }
        .product-template .product__content .thumb-item-wrapper span::before {
          content: "";
          position: absolute;
          top: 0%;
          left: -38%;
          margin-left: -7px;
          border-width: 18px;
          border-style: solid;
          border-color: transparent #623b29 transparent transparent;
          height: 0px; }
    .product-template .product__content .read-more-btn {
      color: #e9501b;
      display: flex;
      justify-content: center;
      margin: 26px 0 25px; }
  .product-template___ctr {
    margin-top: 83px;
    display: flex;
    flex-wrap: wrap; }
    .product-template___ctr h3 {
      color: #623b29;
      font-size: 18px;
      line-height: 26px;
      text-align: center;
      margin: 27px 0 14px; }
    .product-template___ctr p {
      line-height: 26px;
      color: #252525;
      font-size: 14px;
      text-align: justify; }

.single-product-template {
  position: relative; }
  .single-product-template .pepper-image {
    position: absolute;
    right: 0;
    top: -5%; }
  .single-product-template p {
    color: #333333;
    line-height: 26px; }
  .single-product-template .single-product__top {
    display: flex;
    margin-top: 35px; }
    .single-product-template .single-product__top .short-description {
      padding-left: 30px;
      padding-right: 15px; }
      .single-product-template .single-product__top .short-description__p {
        margin: 17px 0 21px;
        line-height: 26px;
        font-size: 14px;
        color: #333333; }
      .single-product-template .single-product__top .short-description__h3 {
        color: #623b29;
        font-size: 24px;
        font-family: FiraSans-Bold; }
  .single-product-template .single-product__more-info {
    display: flex; }
  .single-product-template .single-product table td, .single-product-template .single-product table th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 9px; }
  .single-product-template .single-product table th {
    color: #623b29;
    padding: 17px 10px 17px 9px; }
  .single-product-template .single-product .products_table_headings__h3 {
    color: #623b29;
    font-size: 24px;
    margin: 50px 0 30px;
    font-family: FiraSans-Bold; }
  .single-product-template .single-product .swiper-container .swiper-wrapper {
    text-align: center; }
  .single-product-template .single-product .swiper-navigation__prev svg {
    font-size: 14px;
    position: absolute;
    bottom: -5%;
    z-index: 10;
    cursor: pointer;
    left: 0%;
    display: flex;
    align-items: center;
    justify-content: center; }
  .single-product-template .single-product .swiper-navigation__next svg {
    font-size: 14px;
    position: absolute;
    bottom: -5%;
    z-index: 10;
    cursor: pointer;
    left: 6%;
    display: flex;
    align-items: center;
    justify-content: center; }
  .single-product-template .single-product .swiper-navigation.swiper-button-disabled svg path {
    fill: #F8CABA; }
  .single-product-template .single-product__dark-section {
    background: #623b29;
    padding-top: 50px;
    margin: 60px 0;
    position: relative; }
    .single-product-template .single-product__dark-section .leaf-image {
      position: absolute;
      left: 0;
      top: -45%; }
    .single-product-template .single-product__dark-section__ctr {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      width: calc(25%);
      margin-bottom: 50px; }
      .single-product-template .single-product__dark-section__ctr p {
        color: #fff;
        font-family: FiraSans-Medium;
        margin-top: 8px; }
  .single-product-template .single-product__awards {
    background: #fafaf6;
    padding: 51px 0 61px; }
    .single-product-template .single-product__awards h2 {
      color: #623b29;
      line-height: 32px;
      font-size: 24px;
      font-family: FiraSans-Bold;
      margin-bottom: 40px; }
  .single-product-template .single-product__where-buy {
    margin-top: 77px; }

.recipes-template {
  position: relative; }
  .recipes-template .pepper-icon {
    position: absolute;
    right: 0;
    top: -15%; }
  .recipes-template___ctr {
    display: flex;
    flex-wrap: wrap;
    margin-top: 75px; }
    .recipes-template___ctr .recipes__content .thumb-item-wrapper {
      width: 350px;
      height: 360px; }
      .recipes-template___ctr .recipes__content .thumb-item-wrapper img {
        object-fit: cover;
        width: 350px;
        height: 360px; }
    .recipes-template___ctr .recipes__content h3 {
      position: absolute;
      bottom: 15%;
      left: 5%;
      font-size: 28px;
      line-height: 36px;
      font-family: FiraSans-Bold;
      max-width: 60%; }

.single-recipes-template {
  position: relative; }
  .single-recipes-template .leaves-brands {
    position: absolute;
    right: 0;
    top: -5%; }
  .single-recipes-template .single-recipes {
    margin-top: 20px; }
    .single-recipes-template .single-recipes__top {
      display: flex;
      align-items: center; }
      .single-recipes-template .single-recipes__top .short-description {
        padding-left: 30px;
        padding-right: 15px; }
        .single-recipes-template .single-recipes__top .short-description__h3 {
          font-size: 24px;
          font-family: FiraSans-Bold;
          margin: 8px 0 12px;
          color: #623b29; }
        .single-recipes-template .single-recipes__top .short-description__p {
          font-size: 14px;
          line-height: 26px;
          color: #333333; }
      .single-recipes-template .single-recipes__top .taxonomies-div {
        background: #fafaf6;
        height: 434px;
        max-width: 170px; }
      .single-recipes-template .single-recipes__top .short-description {
        max-width: 750px; }
      .single-recipes-template .single-recipes__top .galery-image {
        max-width: 670px; }
    .single-recipes-template .single-recipes__more-info .col-md-5 {
      max-width: 33%; }
    .single-recipes-template .single-recipes__more-info__recipe-information .recipe-information--content {
      padding: 30px 0;
      margin: 14px 0 30px;
      position: relative; }
      .single-recipes-template .single-recipes__more-info__recipe-information .recipe-information--content__bg {
        background: #fafaf6;
        position: absolute;
        left: -31%;
        top: 0;
        height: 100%;
        width: calc((100vw - 954px)/2 + 1052px);
        z-index: -2; }
    .single-recipes-template .single-recipes__more-info__recipe-information h3 {
      font-size: 24px;
      color: #623b29; }
    .single-recipes-template .single-recipes__more-info__recipe-information p {
      color: #333333;
      font-size: 14px;
      line-height: 26px; }
    .single-recipes-template .single-recipes__more-info__recipe-information h5 {
      color: #623b29;
      font-size: 16px;
      font-family: FiraSans-SemiBold;
      margin: 15px 0; }
    .single-recipes-template .single-recipes__more-info__recipe-information ul {
      padding-inline-start: 0px; }
      .single-recipes-template .single-recipes__more-info__recipe-information ul li {
        margin-bottom: 16px;
        color: #333333; }
        .single-recipes-template .single-recipes__more-info__recipe-information ul li::before {
          content: url("img/check.svg");
          margin-right: 10px; }
    .single-recipes-template .single-recipes__more-info__recipe-information .main_recipe ul {
      padding-inline-start: 30px; }
      .single-recipes-template .single-recipes__more-info__recipe-information .main_recipe ul li::before {
        display: none; }
    .single-recipes-template .single-recipes__more-info__recipe-information .main_recipe p {
      position: relative;
      display: flex;
      color: #623b29;
      font-family: FiraSans-Medium;
      margin-bottom: 15px;
      font-size: 16px; }
      .single-recipes-template .single-recipes__more-info__recipe-information .main_recipe p::before {
        content: attr(data-id);
        margin-right: .5em;
        background: #623b29;
        border-radius: 100%;
        width: 26px;
        height: 26px;
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        left: -6%;
        position: absolute; }
    .single-recipes-template .single-recipes__more-info__recipe-information.col-md-7 {
      margin-left: auto;
      max-width: 530px; }
    .single-recipes-template .single-recipes__more-info__list-info {
      display: flex;
      justify-content: space-between;
      margin-bottom: 28px;
      position: relative; }
      .single-recipes-template .single-recipes__more-info__list-info::after {
        content: '';
        position: absolute;
        bottom: -9px;
        left: 0;
        width: 100%;
        height: 1px;
        background: #ede7e5;
        cursor: pointer; }
      .single-recipes-template .single-recipes__more-info__list-info h4 {
        font-size: 16px;
        color: #623b29;
        line-height: 30px;
        margin-top: 40px; }
    .single-recipes-template .single-recipes__more-info .form-group {
      position: relative; }
      .single-recipes-template .single-recipes__more-info .form-group__items {
        display: flex;
        justify-content: space-between;
        margin-bottom: 12px; }
      .single-recipes-template .single-recipes__more-info .form-group input {
        position: absolute;
        opacity: 0;
        z-index: 2; }
      .single-recipes-template .single-recipes__more-info .form-group label {
        position: relative;
        padding-left: 30px;
        margin-bottom: 20px;
        display: inline-block; }
      .single-recipes-template .single-recipes__more-info .form-group label:before,
      .single-recipes-template .single-recipes__more-info .form-group label:after {
        content: '';
        position: absolute; }
      .single-recipes-template .single-recipes__more-info .form-group label:before {
        width: 16px;
        height: 16px;
        border: 1px solid #555;
        top: 0;
        left: 0;
        border-radius: 4px; }
      .single-recipes-template .single-recipes__more-info .form-group label:after {
        width: 0px;
        height: 0px;
        transition: width 0.2s;
        top: px;
        left: 4px;
        transform: rotate(-45deg); }
      .single-recipes-template .single-recipes__more-info .form-group input:checked + label:after {
        border: 1px solid red;
        border-width: 0 0 2px 2px;
        height: 4px;
        width: 10px;
        opacity: 1; }
  .single-recipes-template .comments-template__div {
    max-width: 600px;
    margin: 0 auto; }
    .single-recipes-template .comments-template__div .comment-form-cookies-consent {
      display: none; }

.footer-top {
  background: #613a29; }
.footer-bottom {
  height: 78px; }
  .footer-bottom__span-text {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 78px; }
    .footer-bottom__span-text__div {
      font-size: 14px;
      font-family: FiraSans-Regular; }
      .footer-bottom__span-text__div:first-child {
        color: #8a8a8a; }
      .footer-bottom__span-text__div:last-child {
        display: flex;
        align-items: center;
        justify-content: center; }
        .footer-bottom__span-text__div:last-child div {
          display: flex;
          align-items: center; }
          .footer-bottom__span-text__div:last-child div:first-child {
            margin-right: 40px; }
          .footer-bottom__span-text__div:last-child div span {
            margin-right: 16px; }

/*Global*/
body {
  color: #252525;
  font-family: FiraSans-Regular;
  font-weight: normal; }

#post-404 {
  display: flex;
  justify-content: center;
  padding: 158px; }

a {
  color: #fff; }

hr {
  height: 2px;
  background: #F0F4F8;
  width: 93%;
  margin: 0 auto; }

.breadcrumbs {
  font-size: 12px;
  color: #623b29; }
  .breadcrumbs__h2 {
    font-size: 32px;
    margin: 130px 0 8px;
    color: #623b29;
    font-family: FiraSans-Bold; }
  .breadcrumbs span {
    color: #8b8b8b; }
  .breadcrumbs .breadcrumb-house {
    margin: 0 3px -2px 8px; }
  .breadcrumbs a {
    color: #8b8b8b; }
    .breadcrumbs a:hover {
      color: #623b29; }

.other-posts {
  justify-content: space-between; }
  .other-posts-ctr {
    max-width: 350px; }
    .other-posts-ctr .post-thumbnail img {
      object-fit: cover;
      height: 220px; }
    .other-posts-ctr .entry-content {
      padding: 25px; }
      .other-posts-ctr .entry-content .date {
        font-size: 14px;
        color: #8b8b8b; }
      .other-posts-ctr .entry-content .title-blog-posts {
        font-family: FiraSans-Bold;
        font-size: 20px;
        color: #333333;
        display: block;
        margin: 12px 0 10px; }
      .other-posts-ctr .entry-content p {
        color: #8b8b8b;
        line-height: 32px; }

.other-post-btn {
  width: 193px;
  margin: 40px auto 80px; }

.read-more-link-blog {
  color: #e9501b;
  margin-top: 15px;
  position: relative;
  display: inline-block; }
  .read-more-link-blog:hover {
    color: #623b29; }
  .read-more-link-blog:hover::after {
    background: #623b29; }
  .read-more-link-blog:after {
    content: '';
    position: absolute;
    bottom: -9px;
    left: 0;
    width: 100%;
    height: 1px;
    background: #e9501b;
    cursor: pointer; }

#terms-category .term-item input {
  content: '';
  margin-right: 10px;
  display: inline-block;
  vertical-align: text-top;
  width: 18px;
  height: 18px;
  border: solid 1px rgba(36, 56, 115, 0.2); }
  #terms-category .term-item input:checked {
    content: '';
    background: #e9501b;
    border: 1px solid #e9501b;
    width: 2px;
    height: 2px;
    box-shadow: 2px 0 0 #e9501b, 4px 0 0 #e9501b, 4px -2px 0 #e9501b, 4px -4px 0 #e9501b, 4px -6px 0 #e9501b, 4px -8px 0 #e9501b;
    transform: rotate(45deg); }

.container-sm {
  max-width: 954px;
  margin: 0 auto; }

.container-md {
  max-width: 983px;
  margin: 0 auto; }
  @media (max-width: 1200px) {
    .container-md {
      max-width: 850px; } }
  @media (max-width: 992px) {
    .container-md {
      max-width: 720px; } }
  @media (max-width: 767px) {
    .container-md {
      max-width: 540px;
      padding-left: 15px;
      padding-right: 15px; } }

.container {
  max-width: 1156px;
  margin: 0 auto; }
  @media only screen and (min-width: 992px) and (max-width: 1280px) {
    .container {
      padding: 0 10px; } }
  @media (max-width: 992px) {
    .container {
      max-width: 720px; } }
  @media (max-width: 767px) {
    .container {
      max-width: 540px;
      padding-left: 15px;
      padding-right: 15px; } }

.container-lg {
  max-width: 1320px;
  margin: 0 auto; }
  @media only screen and (min-width: 992px) and (max-width: 1366px) {
    .container-lg {
      padding: 0 10px; } }

.row {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap; }

.row-nw {
  display: -ms-flexbox;
  display: flex; }

[class*="col-"] {
  position: relative;
  width: 100%; }

@media (min-width: 1200px) {
  .mobile-menu {
    display: none; }

  .desktop-menu {
    display: block; } }
@media (max-width: 1199px) {
  .mobile-menu {
    display: block; }

  .desktop-menu {
    display: none; } }
@media only screen and (min-width: 992px) {
  .col-md-2 {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%; }

  .col-md-2-5 {
    -ms-flex: 0 0 20%;
    flex: 0 0 20%;
    max-width: 20%; }

  .col-md-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%; }

  .col-md-4 {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%; }

  .col-md-5 {
    -ms-flex: 0 0 41.6666666667%;
    flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%; }

  .col-md-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%; }

  .col-md-7 {
    -ms-flex: 0 0 58.3333333333%;
    flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%; }

  .col-md-8 {
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%; }

  .col-md-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%; } }
@media only screen and (max-width: 991px) {
  .col-sm-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%; }

  .col-sm-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%; } }
@media only screen and (max-width: 767px) {
  .col-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%; } }
@media only screen and (min-width: 768px) {
  .col-md-6-small {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%; } }
@media only screen and (max-width: 767px) {
  .col-sm-12-small {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%; } }
.btn {
  height: 54px;
  border: 1px solid #e9501b;
  display: flex;
  justify-content: center;
  align-items: center;
  color: #e9501b;
  font-family: FiraSans-Bold; }
  .btn:hover {
    color: #fff;
    background: #e9501b; }

.heading-with-icon {
  position: relative; }
  .heading-with-icon:after {
    content: url("img/icons/icon-with-text.svg");
    position: absolute;
    top: -50%; }

@media (min-width: 992px) {
  .desktop {
    display: block !important; }

  .mobile {
    display: none !important; }

  .desktop-flex {
    display: flex !important; }

  .mobile-flex {
    display: none !important; } }
@media (min-width: 768px) {
  .desktop-small-flex {
    display: flex !important; }

  .mobile-small-flex {
    display: none !important; }

  .desktop-small {
    display: block !important; }

  .mobile-small {
    display: none !important; } }
@media (max-width: 991px) {
  .desktop {
    display: none !important; }

  .mobile {
    display: block !important; }

  .desktop-flex {
    display: none !important; }

  .mobile-flex {
    display: flex !important; } }
@media (max-width: 767px) {
  .desktop-small-flex {
    display: none !important; }

  .mobile-small-flex {
    display: flex !important; }

  .desktop-small {
    display: none !important; }

  .mobile-small {
    display: block !important; } }
@media only screen and (max-width: 991px) {
  .container {
    max-width: 95%;
    padding-left: unset;
    padding-right: unset; } }
.contact-form-template {
  margin: 20px 0 50px;
  position: relative; }
  .contact-form-template input[type="text"].form-control {
    height: 50px; }
  .contact-form-template input[type="text"].form-control, .contact-form-template textarea.form-control {
    padding: 21px 0px 0px;
    font-size: 14px;
    background: transparent;
    z-index: 2;
    position: relative;
    border-bottom: 1px solid #623b29;
    background-color: transparent;
    border-radius: 0;
    width: 100%;
    color: #623b29;
    font-family: FiraSans-Medium; }
  .contact-form-template textarea.form-control {
    padding: 50px 0px 0px;
    height: 75px;
    resize: none; }
  .contact-form-template .wpcf7-form-control-wrap {
    background: #fff;
    height: 100%;
    display: block; }
  .contact-form-template input[type="text"].form-control + span,
  .contact-form-template textarea.form-control + span {
    margin-top: 5px;
    font-size: 10px;
    font-weight: normal;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.2;
    letter-spacing: normal;
    color: #ff0f4c; }
  .contact-form-template input[type="text"].form-control.wpcf7-not-valid {
    background: url("img/icons/form-error.svg") no-repeat right 10px center !important; }
  .contact-form-template textarea.form-control.wpcf7-not-valid {
    background: url("img/icons/form-error.svg") no-repeat right 10px top 20px; }
  .contact-form-template .label {
    position: absolute;
    z-index: 1;
    font-size: 16px;
    font-weight: 500;
    font-stretch: normal;
    font-style: normal;
    letter-spacing: -0.5px;
    top: 20px;
    -webkit-transition: all 0.2s ease;
    -moz-transition: all 0.2s ease;
    -ms-transition: all 0.2s ease;
    -o-transition: all 0.2s ease;
    transition: all 0.2s ease;
    color: #623b29;
    font-family: FiraSans-Medium; }
  .contact-form-template .form-group.active > .label {
    top: 10px;
    font-size: 12px;
    font-weight: normal;
    z-index: 3;
    color: #623b29;
    font-family: FiraSans-Regular; }
  .contact-form-template .form-group.not-valid-error > .label {
    color: #ff0f4c; }
  .contact-form-template .contact-checkbox {
    font-size: 14px;
    font-weight: normal;
    font-stretch: normal;
    font-style: normal;
    line-height: 1;
    letter-spacing: normal;
    margin-bottom: 20px; }
    .contact-form-template .contact-checkbox .wpcf7-list-item {
      margin: 0; }
    .contact-form-template .contact-checkbox .form-checkbox {
      position: absolute;
      opacity: 0; }
      .contact-form-template .contact-checkbox .form-checkbox + span {
        position: relative;
        cursor: pointer;
        color: #8b8b8b;
        font-size: 12px;
        padding: 0; }
      .contact-form-template .contact-checkbox .form-checkbox + span:before {
        content: '';
        margin-right: 10px;
        display: inline-block;
        vertical-align: text-top;
        width: 18px;
        height: 18px;
        border: solid 1px rgba(36, 56, 115, 0.2); }
      .contact-form-template .contact-checkbox .form-checkbox:checked + span:before {
        background: #f2f2f2; }
      .contact-form-template .contact-checkbox .form-checkbox:checked + span:after {
        content: '';
        position: absolute;
        left: 5px;
        top: 9px;
        background: #e9501b;
        width: 2px;
        height: 2px;
        box-shadow: 2px 0 0 #e9501b, 4px 0 0 #e9501b, 4px -2px 0 #e9501b, 4px -4px 0 #e9501b, 4px -6px 0 #e9501b, 4px -8px 0 #e9501b;
        transform: rotate(45deg); }
    .contact-form-template .contact-checkbox .more {
      font-size: 12px;
      font-weight: bold;
      font-stretch: normal;
      font-style: normal;
      line-height: 1.56;
      letter-spacing: normal;
      position: relative;
      font-family: FiraSans-Bold;
      margin-left: 10px; }
      .contact-form-template .contact-checkbox .more i {
        margin-left: 5px; }
      .contact-form-template .contact-checkbox .more__text {
        font-size: 12px;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.3;
        letter-spacing: normal;
        font-family: FiraSans-Regular;
        visibility: hidden;
        width: 420px;
        background-color: #f2f2f2;
        text-align: center;
        border-radius: 6px;
        padding: 5px 0;
        position: absolute;
        z-index: 3;
        bottom: 125%;
        left: -200px;
        opacity: 0;
        transition: opacity 0.3s; }
        .contact-form-template .contact-checkbox .more__text::after {
          content: "";
          position: absolute;
          top: 100%;
          left: 50%;
          margin-left: -5px;
          border-width: 5px;
          border-style: solid;
          border-color: #f2f2f2 transparent transparent transparent; }
      .contact-form-template .contact-checkbox .more:hover .more__text {
        visibility: visible;
        opacity: 1; }
    .contact-form-template .contact-checkbox .wpcf7-not-valid-tip {
      font-size: 10px;
      font-weight: normal;
      font-stretch: normal;
      font-style: normal;
      line-height: 1.2;
      letter-spacing: normal;
      color: #ff0f4c;
      position: relative; }
      .contact-form-template .contact-checkbox .wpcf7-not-valid-tip:before {
        content: url("img/icons/form-error.svg");
        display: inline-block;
        margin-right: 5px;
        vertical-align: middle; }
  .contact-form-template .form-group {
    margin-bottom: 1rem; }
  .contact-form-template .col-md-6, .contact-form-template .col-md-12 {
    padding-right: 15px;
    padding-left: 15px; }

.comment-form .wppcr_rating {
  float: right;
  border: unset; }
.comment-form input {
  padding: 21px 0px 0px;
  font-size: 14px;
  background: transparent;
  z-index: 2;
  position: relative;
  border-bottom: 2px solid #623b29;
  background-color: transparent;
  border-radius: 0;
  width: 50%;
  color: #623b29;
  font-family: FiraSans-Medium; }
.comment-form textarea {
  padding: 21px 0px 0px;
  font-size: 14px;
  background: transparent;
  z-index: 2;
  position: relative;
  border-bottom: 2px solid #623b29;
  background-color: transparent;
  border-radius: 0;
  width: 100%;
  color: #623b29;
  font-family: FiraSans-Medium; }

/*# sourceMappingURL=style.ss.map */
