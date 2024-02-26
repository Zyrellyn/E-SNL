<!DOCTYPE html>
<html lang="en">
<head>
  <title>Landing | E-SNL </title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<style>
  body {
    margin: 0;
    background-color: #252954;
    width: 100%;
  }

  .hidden {
    display: none;
  }

  .landingpage {
    margin: 0 auto;
    padding: 0 80px;
    position: relative;
    max-width: 1100px;
    overflow-y: auto;
    overflow-x: hidden;
    background-color: #1F1D2B;
  }
  .landingpage::before {
    content: "";
    position: absolute;
    width: 123px;
    height: 123px;
    left: 60%;
    top: 138px;
    filter: blur(90px);
    background-color: #FB37FF;
  }
  .landingpage::after {
    content: "";
    position: absolute;
    width: 123px;
    height: 123px;
    left: 80%;
    top: 550px;
    background-color: #18B2DE;
    filter: blur(80px);
  }
  .landingpage .navbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 0;
    width: 100%;
  }
  .landingpage .box {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 80px;
  }
  .landingpage .auction {
    margin-top: 100px;
  }
  .landingpage .discover {
    display: flex;
    flex-direction: column;
  }
  .landingpage .footer {
    margin: 50px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .landingpage .footer2 {
    display: flex;
    justify-content: space-between;
    padding-bottom: 30px;
    border-top: 1px solid #F2F2F2;
  }
  .navbar .createbtn {
    cursor: pointer;
    background-color: transparent;
    border: none;
    width: 126px;
    height: 45px;
    color: #BCBCBC;
    font-family: "Poppins";
    font-style: normal;
    font-weight: 500;
    font-size: 16px;
  }
  .navbar .createbtn.selectedbtn {
    border: 1px solid #D7D7D7;
    border-radius: 10px;
  }
  .navbar .navlogo {
    height: 100%;
    background: linear-gradient(93.51deg, #9B51E0 2.84%, #3081ED 99.18%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-family: "Poppins";
    font-style: normal;
    font-weight: 700;
    font-size: 35px;
  }
  .navbar .navlink {
    font-family: "Poppins";
    font-style: normal;
    font-weight: 500;
    font-size: 14px;
    color: #BCBCBC;
  }
  .navbar .navlink.selectedlink {
    background: linear-gradient(93.51deg, #9B51E0 2.84%, #3081ED 99.18%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;    
  }
  .navbar .navlink:not(:last-child) {
    margin-right: 32px;
    
  }

  .box .infobox {
    animation-name: leftslide;
    animation-duration: 0.8s;
    max-height: 500px;
    max-width: 55%;
    overflow: hidden;
  }
  .box .infobox-boldtext {
    margin: 0;
    font-family: Poppins;
    color: #FFFFFF;
    font-size: 70px;
    font-weight: 600;
    line-height: 60px;
    letter-spacing: -2px;
    text-align: left;
  }
  .box .infobox-slimtext {
    margin: 24px 0;
    font-family: Poppins;
    color: #FFFFFF;
    font-size: 18px;
    font-weight: 400;
    line-height: 18px;
    letter-spacing: 0.5px;
    text-align: left;
  }
  .box .infobox-btnwrapper {
    display: flex;
  }
  .box .infobox-explorebtn {
    cursor: pointer;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #1F1D2B;
    padding: 8px 38px;
    border-radius: 16px;
    font-family: "Poppins";
    font-style: normal;
    font-weight: 600;
    font-size: 16px;
    letter-spacing: -1px;
    color: #FFFFFF;
  }
  .box .infobox-createbtn {
    cursor: pointer;
    margin-left: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: transparent;
    padding: 8px 38px;
    border: 1px solid #D7D7D7;
    border-radius: 16px;
    font-family: "Poppins";
    font-style: normal;
    font-weight: 600;
    font-size: 15px;
    letter-spacing: -1px;
    color: #FFFFFF;
  }
  .box .infobox .selected {
    border: none;
    background: linear-gradient(103.91deg, #9B51E0 21.01%, rgba(48, 129, 237, 0.8) 100%);
  }
  .box .display {
    animation-name: rightslide;
    animation-duration: 0.8s;
    padding: 14px;
    border: 1px solid;
    background: linear-gradient(169.44deg, rgba(58, 129, 191, 0.08) 1.85%, rgba(65, 48, 90, 0.08) 98.72%);
    border-radius: 35px;
    max-height: 450px;
    max-width: 50%;
    overflow: hidden;
  }
  .box .display-nft {
    object-fit: cover;
    flex-shrink: 0;
    width: 400px;
    height: 400px;
    border-radius: 20px;
  }
  .box .display .infowrapper {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 10px;
  }
  .box .display .info {
    display: flex;
    align-items: center;
    font-family: "Poppins";
    font-style: normal;
    color: #FFFFFF;
    font-weight: 600;
    font-size: 12px;
  }
  .box .display .info p {
    margin: 0;
  }
  .box .display .info-img {
    object-fit: cover;
    flex-shrink: 0;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    margin-right: 10px;
  }
  .box .display .info2 {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    font-family: "Poppins";
    color: #FFFFFF;
    font-style: normal;
    font-weight: 600;
    font-size: 12px;
  }
  .box .display .info2 p {
    margin: 0;
  }
  .box .display .info2 .iconwrapper {
    display: flex;
    align-items: center;
  }
  .box .display .info2 .iconwrapper svg {
    margin-right: 5px;
  }

  .auction .title {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: 50px;
  }
  .auction .title .titlebold {
    margin: 0;
    font-family: "Poppins";
    font-style: normal;
    color: #FFFFFF;
    font-weight: 500;
    font-size: 48px;
    line-height: 72px;
  }
  .auction .title .titleslim {
    margin: 0;
    font-family: "Poppins";
    font-style: normal;
    color: #D7D7D7;
    font-weight: 600;
    font-size: 18px;
    line-height: 36px;
    letter-spacing: 1px;
  }
  .titleslim{
    margin: 0;
    font-family: "Poppins";
    font-style: normal;
    color: #D7D7D7;
    font-weight: 600;
    font-size: 18px;
    line-height: 36px;
    letter-spacing: -1px;
  }
  .auction .nft {
    display: grid;
    grid-template-columns: auto auto auto auto;
    grid-row-gap: 20px;
    grid-column-gap: 20px;
    justify-content: space-between;
  }

  .started {
    margin-top: 100px;
    display: flex;
    flex-direction: column;
  }
  .started-boldtext {
    margin: 0;
    align-self: center;
    font-family: "Poppins";
    font-style: normal;
    color: #FFFFFF;
    font-weight: 500;
    font-size: 40px;
    line-height: 72px;
  }
  .started-slimtext {
    margin: 0;
    align-self: center;
    font-family: "Poppins";
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 36px;
    letter-spacing: 0.5px;
    color: #E2E2E2;
  }
  .started-items {
    padding: 60px 80px;
    position: relative;
    display: grid;
    grid-template-columns: auto auto auto auto;
    grid-column-gap: 20px;
    grid-row-gap: 20px;
    justify-content: space-between;
  }
  .started-items:before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100px;
    top: 80px;
    filter: blur(80px);
    background: linear-gradient(93.51deg, #9B51E0 2.84%, #3081ED 99.18%);
  }
  .started-items .itemwrapper p {
    width: 100px;
    margin: 0;
    margin-top: 10px;
    text-align: center;
    font-family: "Poppins";
    font-style: normal;
    font-weight: 400;
    font-size: 12px;
    color: #FFFFFF;
  }
  .started-items-item {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100px;
    height: 100px;
    border-radius: 18px;
    background-color: red;
    background: rgba(255, 255, 255, 0.095);
    box-shadow: inset 2.01px -2.01px 20px rgba(214, 214, 214, 0.17), inset -3.01333px 3.01333px 3.01333px rgba(255, 255, 255, 0.39);
    backdrop-filter: blur(74.4293px);
  }

  .discover-title {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .discover-title p {
    font-family: "Poppins";
    font-style: normal;
    font-weight: 500;
    font-size: 36px;
    letter-spacing: -1px;
    color: #FFFFFF;
  }
  .discover-items {
    display: grid;
    grid-template-columns: auto auto auto auto;
    grid-row-gap: 20px;
    grid-column-gap: 20px;
    justify-content: space-between;
  }
  .discover-loadbtn {
    cursor: pointer;
    margin-top: 20px;
    align-self: center;
    width: 161px;
    height: 40px;
    border: 1px solid #D7D7D7;
    border-radius: 10px;
    background-color: transparent;
    font-family: "Poppins";
    font-style: normal;
    font-weight: 500;
    font-size: 12px;
    letter-spacing: 1.5px;
    color: #BCBCBC;
  }

  .footer-main {
    max-width: 40%;
    font-family: "Poppins";
    font-style: normal;
    font-weight: 500;
    font-size: 30px;
    line-height: 40px;
    color: #FFFFFF;
  }
  .footer-navigate {
    display: flex;
  }
  .footer-navigate .nav {
    margin-left: 90px;
  }
  .footer-navigate .nav h5 {
    margin: 0;
    font-family: "Poppins";
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 30px;
    color: #FFFFFF;
  }

  .footer2 p {
    font-family: "Poppins";
    font-style: normal;
    font-weight: 400;
    font-size: 12px;
    line-height: 36px;
    color: #828282;
  }

  .item {
    display: flex;
    flex-direction: column;
    justify-self: center;
  }
  .item-img {
    object-fit: cover;
    flex-shrink: 0;
    width: 200px;
    height: 220px;
    border-radius: 10px;
    transition: 0.3s;
    cursor: pointer;
  }
  .item-img:hover {
    transform: scale(1.05);
  }
  .item-title {
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-bottom: 1px solid white;
    font-family: "Poppins";
    font-style: normal;
    font-weight: 600;
    font-size: 12px;
    line-height: 24px;
    color: #FFFFFF;
  }
  .item-date {
    font-family: "Poppins";
    font-style: normal;
    font-weight: 400;
    font-size: 12px;
    line-height: 24px;
    color: #BCBCBC;
  }

  @media screen and (max-width: 1500px) {
    .landingpage {
      max-width: 1200px;
    }
  }
  @media screen and (max-width: 1040px) {
    .box {
      flex-direction: column;
    }
    .box .infobox {
      max-height: 450px;
      max-width: none;
      margin-bottom: 50px;
    }
    .box .display {
      display: none;
      max-height: none;
      max-width: none;
    }

    .auction .nft {
      grid-template-columns: auto auto;
      justify-content: space-around;
    }

    .discover-items {
      grid-template-columns: auto auto auto;
      justify-content: space-around;
    }

    .footer {
      flex-direction: column;
    }
    .footer-main {
      max-width: 80%;
      margin-bottom: 50px;
      text-align: center;
    }
    .footer-navigate .nav:first-child {
      margin: 0;
    }
  }
  @media screen and (max-width: 925px) {
    .navlinkwrap {
      display: none;
    }

    .buttonwrap {
      display: none;
    }

    .hamburger {
      display: flex !important;
      align-items: center;
    }

    .started-slimtext {
      text-align: center;
    }
  }
  @media screen and (max-width: 825px) {
    .started-items {
      display: grid;
      grid-template-columns: auto auto;
      justify-content: space-evenly;
      padding: 50px 0;
    }
    .started-items:before {
      height: 200px;
      top: 90px;
      filter: blur(120px);
    }

    .discover-items {
      grid-template-columns: auto auto;
      justify-content: space-around;
    }
  }
  @media screen and (max-width: 700px) {
    .box {
      flex-direction: column;
    }
    .box .infobox {
      max-height: none;
      max-width: none;
      margin-bottom: 50px;
    }
    .box .display {
      display: block;
      max-height: none;
      max-width: none;
    }

    .discover-title {
      justify-content: center;
    }
    .discover-title .filters {
      display: none;
    }

    .auction .title {
      justify-content: center;
    }
    .auction .title .titleslim {
      display: none;
    }
  }
  @media screen and (max-width: 600px) {
    .landingpage {
      padding: 0 20px;
    }

    .box .infobox-boldtext {
      font-size: 45px;
      line-height: 50px;
    }
    .box .infobox-slimtext {
      font-size: 12px;
      line-height: 16px;
    }

    .discover-items {
      grid-template-columns: auto;
      justify-content: space-around;
    }

    .auction .nft {
      grid-template-columns: auto;
      justify-content: space-around;
    }

    .footer-main {
      font-size: 20px;
      line-height: 30px;
      max-width: 100%;
      margin-bottom: 50px;
      text-align: center;
    }

    .footer-navigate {
      justify-content: space-between;
      width: 100%;
    }
    .footer-navigate .nav {
      margin-left: 20px;
    }
    .footer-navigate .nav h5 {
      font-size: 15px;
      line-height: 30px;
    }
    .footer-navigate .nav p {
      font-size: 10px;
      line-height: 18px;
    }
  }
  @media screen and (max-width: 480px) {
    .landingpage .box .infobox-boldtext {
      font-size: 32px;
      line-height: 1.4em;
      text-align: center;
    }
    .landingpage .box .infobox-slimtext {
      text-align: center;
    }
    .landingpage .box .infobox-btnwrapper {
      justify-content: center;
    }
  }
  @keyframes leftslide {
    from {
      transform: translateX(-700px);
    }
    to {
      transform: translateX(0px);
    }
  }
  @keyframes rightslide {
    from {
      transform: translateX(550px);
    }
    to {
      transform: translateX(0px);
    }
  }
</style>
</head>
<body>
  <div class="landingpage">
    <div class="navbar">
      <a class="navlogo">E-SNL</a>
      <div class="navlinkwrap">
        {{-- jika ingin berwarna beri "selectedlink" --}}
        <span class="navlink" ><a href="#home" style="text-decoration: none; color: rgb(203, 203, 203)">Home</a></span>
        <span class="navlink"><a href="#about" style="text-decoration: none; color: rgb(203, 203, 203)">Profile</a></span>
        <span class="navlink"><a href="#work" style="text-decoration: none; color: rgb(203, 203, 203)">How It Works</a></span>
      </div>
      <div class="buttonwrap">
        
      </div>
    </div>
    <div class="box" id="home">
      <div class="infobox">
        <p class="infobox-boldtext">
          WELCOME TO E-SNL  
        </p>
        <p class="infobox-slimtext">
          Special Novel Library, Discover Worlds  Between The Stories
        </p>
        <div class="infobox-btnwrapper">
          <a href="{{ route('login') }}"class="infobox-explorebtn selected" style="text-decoration: none; padding: 15px">Bergabung Sekarang</a>
        </div>
      </div>
      <div class="display ">
        <img class="display-nft" src="img/5836.jpg" alt="unsplash-OG44d93i-NJk" >
      </div>
    </div>
    <div class="auction" id="about">
      <div class="title">
        <p class="titlebold">Tentang Kami</p>
      </div>
      <div class="titleslim">      
        Selamat datang di Perpustakaan Khusus Novel, tempat di mana cerita-cerita menakjubkan menanti untuk ditemukan.
        <br>
        Kami adalah destinasi utama bagi para pecinta novel yang ingin menjelajahi dunia fiksi melalui berbagai genre dan penulis terkenal.
        <br>
        Sebuah website E-SNL yang dijabarkan dengan Special Novel Library dan bisa diartikan dengan Perpustakaan Khusus Novel ini merupakan platform online yang menyediakan akses kekoleksi buku fiksi yang luas, baik dalam bentuk cetak maupun digital. Pengguna dapat meminjam dan menelusuri berbagai genre novel. Dengan adanya website ini menjadi sumber daya yang berharga bagi para penggemar literatur untuk mengeksplorasi dunia buku fiksi dengan mudah dan nyaman.
      </div>
    </div>
    <div class="started" id="work">
      <p class="started-boldtext">Bagaimana Cara Bergabung</p>
      <p class="started-slimtext">Bergabunglah dengan perpustakaan online kami dalam beberapa langkah mudah:</p>
      <div class="started-items">
        <div class="itemwrapper">
          <div class="started-items-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40">
              <path style="stroke:none;fill-rule:nonzero;fill:#e0e0e0;fill-opacity:1" d="M24.7969 14.6719c.4375-.4414.4375-1.1524 0-1.5938-.4414-.4375-1.1524-.4375-1.5938 0L16.5 19.7851l-2.9531-2.957c-.4414-.4375-1.1524-.4375-1.5938 0-.4375.4414-.4375 1.1524 0 1.5938l3.75 3.75a1.1246 1.1246 0 0 0 1.5938 0Zm0 0"/>
              <path style="stroke:none;fill-rule:evenodd;fill:#e0e0e0;fill-opacity:1" d="M18.8086.957a2.6005 2.6005 0 0 0-1.6172 0L4.8164 4.9688C3.7344 5.3202 3 6.3241 3 7.4648V15c0 9.2852 5.6563 16.0586 14.1016 19.246a2.5853 2.5853 0 0 0 1.7968 0C27.3438 31.0587 33 24.2853 33 15V7.4648a2.6182 2.6182 0 0 0-1.8164-2.496Zm-.9219 2.1368a.3738.3738 0 0 1 .2266 0l12.375 4.0117c.1601.0547.2617.1992.2617.3593V15c0 8.1914-4.9219 14.2227-12.6445 17.1367a.2815.2815 0 0 1-.211 0C10.172 29.2227 5.25 23.1914 5.25 15V7.4648c0-.1601.1016-.3046.2617-.3593Zm0 0"/>
            </svg>
          </div>
          <p>Regristrasi Akun Baru</p>
        </div>
        <div class="itemwrapper">
          <div class="started-items-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"  width="40" height="40"><path style="stroke:none;fill-rule:evenodd;fill:#bdbdbd;fill-opacity:1;" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM96.8 314.1c-3.8-13.7 7.4-26.1 21.6-26.1H393.6c14.2 0 25.5 12.4 21.6 26.1C396.2 382 332.1 432 256 432s-140.2-50-159.2-117.9zm36.7-199.4l89.9 47.9c10.7 5.7 10.7 21.1 0 26.8l-89.9 47.9c-7.9 4.2-17.5-1.5-17.5-10.5c0-2.8 1-5.5 2.8-7.6l36-43.2-36-43.2c-1.8-2.1-2.8-4.8-2.8-7.6c0-9 9.6-14.7 17.5-10.5zM396 125.1c0 2.8-1 5.5-2.8 7.6l-36 43.2 36 43.2c1.8 2.1 2.8 4.8 2.8 7.6c0 9-9.6 14.7-17.5 10.5l-89.9-47.9c-10.7-5.7-10.7-21.1 0-26.8l89.9-47.9c7.9-4.2 17.5 1.5 17.5 10.5z"/></svg>
          </div>
          <p>Menikmati Membaca Novel</p>
        </div>
        <div class="itemwrapper">
          <div class="started-items-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"  width="40" height="40"><path style="stroke:none;fill-rule:evenodd;fill:#bdbdbd;fill-opacity:1;" d="M249.6 471.5c10.8 3.8 22.4-4.1 22.4-15.5V78.6c0-4.2-1.6-8.4-5-11C247.4 52 202.4 32 144 32C93.5 32 46.3 45.3 18.1 56.1C6.8 60.5 0 71.7 0 83.8V454.1c0 11.9 12.8 20.2 24.1 16.5C55.6 460.1 105.5 448 144 448c33.9 0 79 14 105.6 23.5zm76.8 0C353 462 398.1 448 432 448c38.5 0 88.4 12.1 119.9 22.6c11.3 3.8 24.1-4.6 24.1-16.5V83.8c0-12.1-6.8-23.3-18.1-27.6C529.7 45.3 482.5 32 432 32c-58.4 0-103.4 20-123 35.6c-3.3 2.6-5 6.8-5 11V456c0 11.4 11.7 19.3 22.4 15.5z"/></svg>
          </div>
          <p>Pinjam dan Kembalikan Novel</p>
        </div>
        <div class="itemwrapper">
          <div class="started-items-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"  width="40" height="40"><path  style="stroke:none;fill-rule:evenodd;fill:#bdbdbd;fill-opacity:1;" d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480V396.4c0-4 1.5-7.8 4.2-10.7L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z"/></svg>
          </div>
          <p>Jelajahi Novel yang Tersedia</p>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="footer-main" style="font-size: 40 px">
        TUNGGU APALAGI? 
        <br>
        AYO BERGABUNG!
      </div>
      <div class="footer-navigate">
        <div class="nav">
          <h5>Jangan biarkan cerita-cerita menakjubkan terlewatkan. Bergabunglah dengan Perpustakaan Khusus Novel kami hari ini dan mulailah petualangan literasi Anda. Jadikan setiap halaman buku sebagai jendela menuju dunia yang tak terbatas.</h5>
        </div>
      </div>
    </div>
    <div class="footer2">
      <div></div>
      <p>Copyright © 2024 Syifa Fadila</p>
    </div>
  </div>
</body>
<script>
  function toggleMenu() {
      var menu = document.querySelector('.navlinkwrap');
      menu.classList.toggle('show-menu');
    }
</script>
</html>