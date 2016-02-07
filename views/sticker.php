<section class="sticker-template" ng-init="setLayout('customize')">
    <div class="content--left">
        <section class="overlay-customization" ng-if="layout != 'customize'">
            <a href="" ng-click="setLayout('customize')">
                Revenir à la personnalisation
            </a>
        </section>
        <section class="custom-sticker choose-view">
            <h4>L'angle de vue</h4>
            <div>
                <a href="" class="face active" ng-click="chooseView('face')">
                    <span>
                        <img src="assets/img/face256.png" alt="">
                    </span>
                    <p>Face</p>
                </a>
                <a href="" class="back" ng-click="chooseView('back')">
                    <span>
                        <img src="assets/img/back256.png" alt="">
                    </span>
                    <p>Arrière</p>
                </a>
                <div class="clear"></div>
            </div>
        </section>
        <section class="custom-sticker choose-color">
            <h4>Les couleurs</h4>
            <div>
                <article class="color-picker color_0">
                    <span>{{colorPickerNames[0]}}</span>
                    <div class="picker">
                        <a ng-click="chooseColor('color_0','yellow')" class="yellow" href=""></a>
                        <a ng-click="chooseColor('color_0','red')" class="red" href=""></a>
                        <a ng-click="chooseColor('color_0','green')" class="green" href=""></a>
                        <a ng-click="chooseColor('color_0','blue')" class="blue" href=""></a>
                        <a ng-click="chooseColor('color_0','white')" class="white active" href=""></a>
                    </div>
                </article>
                <article class="color-picker color_1">
                    <span>{{colorPickerNames[1]}}</span>
                    <div class="picker">
                        <a ng-click="chooseColor('color_1','yellow')" class="yellow" href=""></a>
                        <a ng-click="chooseColor('color_1','red')" class="red" href=""></a>
                        <a ng-click="chooseColor('color_1','green')" class="green" href=""></a>
                        <a ng-click="chooseColor('color_1','blue')" class="blue" href=""></a>
                        <a ng-click="chooseColor('color_1','white')" class="white active" href=""></a>
                    </div>
                </article>
                <article class="color-picker color_2">
                    <span>{{colorPickerNames[2]}}</span>
                    <div class="picker">
                        <a ng-click="chooseColor('color_2','yellow')" class="yellow" href=""></a>
                        <a ng-click="chooseColor('color_2','red')" class="red" href=""></a>
                        <a ng-click="chooseColor('color_2','green')" class="green" href=""></a>
                        <a ng-click="chooseColor('color_2','blue')" class="blue" href=""></a>
                        <a ng-click="chooseColor('color_2','white')" class="white active" href=""></a>
                    </div>
                </article>
            </div>
        </section>
        <section class="custom-sticker choose-message">
            <h4>Votre message</h4>
            <textarea ng-keyup="chooseMessage()" name="" id="sticker-message" maxlength="100" placeholder="Entrez un message"></textarea>
        </section>
        <section class="custom-sticker choose-name">
            <h4>Votre prénom</h4>
            <textarea ng-keyup="chooseName()" name="" id="sticker-name" maxlength="15" placeholder="Entrez votre prénom"></textarea>
        </section>
    </div>
    <div class="content--right">
        <header>
            <a href="/" class="close-template btn">
                <svg version="1.1"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                     x="0px" y="0px" width="24.2px" height="24.2px" viewBox="0 0 24.2 24.2" style="enable-background:new 0 0 24.2 24.2;"
                     xml:space="preserve">
                    <style type="text/css">
                        .yellow{fill:#000;}
                    </style>
                    <defs>
                    </defs>
                    <polygon class="yellow" points="0,3 9.1,12.1 0,21.2 3,24.2 12.1,15.2 21.2,24.2 24.2,21.2 15.2,12.1 24.2,3 21.2,0 12.1,9.1 3,0 "/>
                </svg>

                <p>Revenir à l'accueil</p>
            </a>
            <h1>{{pageH1}}</h1>
        </header>
        <section class="the-sticker {{layout}}">
            <div id="sticker-custom" ng-init="setStickerStyle()">
                <div class="sticker-main-content">
                    <div class="svg face" ng-if="sticker.view == 0">
                        <!-- Generator: Adobe Illustrator 19.2.0, SVG Export Plug-In  -->
                        <svg version="1.1"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                             x="0px" y="0px" width="804.4px" height="667.4px" viewBox="0 0 804.4 667.4" style="enable-background:new 0 0 804.4 667.4;"
                             xml:space="preserve">
                        <style type="text/css">
                            .st0{fill:#A6F574;}
                            .st1{fill:#FFC600;}
                            .st2{fill:#90D8FC;}
                        </style>
                        <defs>
                        </defs>
                        <g>
                            <g>
                                <path class="st0" style="fill: #{{sticker.color_0}}" d="M742.8,514.7c0,0,35-192.8-5.7-256.3c-40.7-63.5-107-70.6-107-70.6s111.3,25,140.6,97.8
                                    c29.3,72.8,20.7,182.2,0,233.4c-29.9,5.3-29.9,5.3-29.9,5.3L742.8,514.7z"/>
                                <path class="st0" style="fill: #{{sticker.color_0}}" d="M695.5,214.9c-22.2-17.8-65.5-27.1-65.5-27.1l-90.9-6.2l-11.5,4.8c0,0-88.4-2.7-100.2-3.3
                                    c-8.2-6.1-23.9-6.9-23.9-6.9H401c0,0-15.7,0.8-23.9,6.9c-11.8,0.6-100.2,3.3-100.2,3.3l-11.5-4.9l-90.9,6.2
                                    c0,0-43.3,9.3-65.5,27.1c-22.2,17.8-68.3,47.6-60.4,182.6c7.3,78.5,15.2,126.9,15.2,126.9s152.4,27.1,338.4,20
                                    c186,7.1,338.4-20,338.4-20s7.9-48.4,15.2-126.9C763.9,262.4,717.8,232.6,695.5,214.9z"/>
                                <path class="st0" style="fill: #{{sticker.color_0}}" d="M605.8,38.2C597.5,20.6,563,1.6,403.9,2.5C244.8,1.6,206,20.6,197.7,38.2c-8.3,17.6-45.1,149.7-45.1,149.7
                                    v5.7l21.5-5.8l81.7-7.5l21,6.1l95.2-3.1l32-6.8l28.4,6.8l95.3,3.1l21-6.1l81.1,7.5l20.8,5.8v-5.7
                                    C650.5,187.9,614.1,55.8,605.8,38.2z"/>
                                <path class="st0" style="fill: #{{sticker.color_0}}" d="M61.8,514.7c0,0-35-192.8,5.7-256.3s107-70.6,107-70.6s-111.3,25-140.6,97.8s-20.7,182.2,0,233.4
                                    c29.9,5.3,29.9,5.3,29.9,5.3L61.8,514.7z"/>
                            </g>
                            <path class="st0" style="fill: #{{sticker.color_0}}" d="M788.8,512.4c0,0-2.3-5.2-4.5,3.5C667.1,544.9,400.8,543,400.8,543s-263.6,2-380.8-27.1
                                c-2.2-8.7-4.3-3.5-4.3-3.5s-23.2,42-8.2,54.9s30.4,21.1,137.2,26.8c99.6,5.3,237.9,7,255.9,7.2v0c0,0,0.3,0,1,0c0.7,0,1,0,1,0v0
                                c19-0.2,157-1.9,256.6-7.2c106.8-5.6,122.8-13.8,137.7-26.8S788.8,512.4,788.8,512.4z"/>
                        </g>
                        <path d="M737.5,527.4l2.8-13.2c0.7-3.6,34.1-192.8-5.4-254.4c-17-26.5-38.6-43-57.8-53.3c-26.1-11.4-47.4-16.2-47.7-16.3l0.8-4.9
                            c0.7,0.1,17.2,1.9,39,11.7c3.4,1.5,7,3.3,10.8,5.3c3.4,1.5,6.8,3.1,10.3,4.8c29.1,14.2,67.1,39.2,82.5,77.5
                            c13.4,33.3,20.1,78,18.9,125.8c-1,41.8-8.1,82.8-18.9,109.5l-0.5,1.3L737.5,527.4z M711.6,224.5c9.7,8.7,19.2,19.4,27.6,32.5
                            c17.2,26.8,23.4,78.4,18.5,153.5c-3.6,55.6-12.3,104.1-12.4,104.6l0,0.1l-1.3,6l24.9-4.4c10.3-26.2,17-65.9,18-106.5
                            c1.2-47.1-5.4-91.1-18.6-123.8C761.5,269.6,746.1,246.3,711.6,224.5z"/>
                        <path d="M464.8,548c-20.3,0-41.2-0.4-62.5-1.2c-184.1,7-337.3-19.8-338.9-20.1l-1.7-0.3l-0.3-1.7c-0.1-0.5-8-49.4-15.2-127.1
                            c-7.7-130.6,35.2-164.3,58.3-182.4c1-0.8,2-1.6,3-2.3c22.4-17.9,64.8-27.2,66.6-27.6l0.4-0.1l91.5-6.2l11.5,4.8
                            c7.3-0.2,85.3-2.7,98.9-3.4c8.8-6,23.9-7.1,24.6-7.2l0.2,0l2.7,0c0.7,0,15.8,1.2,24.6,7.2c13.5,0.6,91.5,3.2,98.9,3.5l11.5-4.9
                            l0.6,0l91.1,6.2l0.2,0c1.8,0.4,44.1,9.6,66.6,27.5c1,0.8,1.9,1.5,3,2.3c23.1,18.1,66,51.8,58.3,182.3
                            c-7.2,77.8-15.2,126.7-15.2,127.2l-0.3,1.7l-1.7,0.3C739.8,527,619.8,548,464.8,548z M402.3,541.9L402.3,541.9
                            c173.1,6.6,318.7-16.7,336.2-19.7c1.5-9.4,8.5-55.7,14.9-125c3.3-55.4-2.4-99.3-16.9-130.5c-12.2-26.1-27.9-38.5-39.5-47.6
                            c-1-0.8-2-1.6-3-2.4c-20.8-16.6-61.3-25.9-64.3-26.5l-90.1-6.1l-11.5,4.8l-0.5,0c-0.9,0-88.5-2.9-100.2-3.5l-0.8,0l-0.6-0.4
                            c-7.2-5.3-21.3-6.6-22.5-6.7h-2.4c-1.2,0.1-15.3,1.3-22.5,6.7l-0.6,0.4l-0.8,0c-11.7,0.6-99.3,3.4-100.2,3.4l-0.5,0l-11.5-4.8
                            l-90.1,6.1c-3,0.7-43.5,9.9-64.3,26.5c-1,0.8-2,1.6-3,2.4c-11.5,9.1-27.3,21.5-39.5,47.6c-14.5,31.1-20.2,75.1-16.9,130.6
                            c6.4,69.2,13.4,115.5,14.9,124.9C83.5,525.1,229.2,548.5,402.3,541.9L402.3,541.9z"/>
                        <path d="M682.5,332.3h-280H402H122c0,0-38.2-3.8-31,52.2c7.2,56,13.8,69.8,42.8,69.8c26.9,0,237.1,0,266.7,0c0,0,1.2,0,3.5,0
                            c29.6,0,239.8,0,266.7,0c29,0,35.6-13.8,42.8-69.8C720.7,328.5,682.5,332.3,682.5,332.3z"/>
                        <path d="M569.7,246.1l-5-0.7c0-0.3,4.2-34.3-27.3-62l3.3-3.8C574.4,209.3,569.9,244.7,569.7,246.1z"/>
                        <path d="M424.2,244.2l-4.7-1.6c0.1-0.2,7-21.6,4.5-59.4l5-0.3C431.5,221.8,424.5,243.3,424.2,244.2z"/>
                        <path d="M653.5,196.9l-24-6.6l-80.7-7.4l-20.9,6.1l-95.9-3.1l-28-6.7l-31.7,6.7l-95.8,3.1l-20.9-6.1l-80.9,7.4l-24.2,6.6v-9.4
                            l0.1-0.3c1.5-5.4,36.8-132.5,45.1-150.1c5.5-11.6,21.2-20.1,48.2-26.1C278.3,3.3,332.2-0.4,404,0c72.6-0.4,124.4,3.2,158.1,11
                            c25.9,6,40.6,14.3,46.2,26.1l0,0c8.3,17.6,43.6,144.7,45.1,150.1l0.1,0.3V196.9z M155.5,188.2v2.1l18.6-5l82-7.5l21,6.2l94.5-3.1
                            L404,174l28.7,6.9l94.6,3.1l21.1-6.2l82.3,7.6l17.9,4.9v-2.1c-2-7.3-36.8-132.1-44.7-148.9c-1.8-3.8-7.2-15.2-42.8-23.4
                            C528.2,8.3,475.3,4.6,404,5C279.9,4.3,211.3,15.8,200.2,39.3C192.3,56.1,157.6,180.9,155.5,188.2z"/>
                        <path d="M651,187.9c0,0,39.1-0.9,44.2-1.6c5-0.7,7.1,1.4,7.1-20s-21-16.8-32.8-17.6c-11.8-0.8-21.4,0-21.4,4s-5.1,11.2-5.1,11.2
                            L651,187.9z"/>
                        <path d="M721.4,667.4c17.9,0,37.9-9.5,40-40.6c2.1-31.1,3.1-43.8,3.1-43.8s-45.5,9.8-59.9,8.1s-18.8-0.7-18.8-0.7s0.3,32.7,0,54.8
                            S721.4,667.4,721.4,667.4z"/>
                        <path d="M398.5,603.8L398.5,603.8c-24.4-0.4-157.6-2.2-253.8-7.3c-108.8-5.7-123.7-14.1-139-27.4c-16-13.9,6-54.9,7.6-57.9
                            c0.7-1.5,2-3.1,4-3c2.4,0.2,3.7,2.7,4.5,5.5c116.3,28.3,376.1,26.7,378.8,26.7c2.7,0,265.2,1.6,381.5-26.7c0.8-2.8,2.1-5.3,4.6-5.5
                            c2-0.2,3.5,1.4,4.2,2.9c1.5,2.7,23.6,44,7.5,58c-15.2,13.2-30.1,21.6-139.1,27.4c-96.2,5.1-229.6,6.9-254,7.2v0.1l-3.5,0
                            L398.5,603.8z M17.1,515c-6.4,12.2-18.6,41.3-8,50.5c12.5,10.8,23.3,20.2,136,26.2c100.1,5.3,240.4,7,256,7.2l1.2,0l0.7,0
                            c15.7-0.2,156.2-1.9,256.2-7.2c105.2-5.6,121.6-13.6,136.1-26.2c10.6-9.2-1.7-38.7-8.1-50.7c-0.2,0.5-0.3,1.1-0.5,1.8l-0.4,1.5
                            l-1.5,0.4c-116.2,28.8-381.5,27.2-384.2,27.2c-2.6,0-265.2,1.6-381.4-27.2l-1.5-0.4l-0.4-1.5C17.4,515.9,17.3,515.4,17.1,515z"/>
                        <path d="M67.1,527.4l-34.9-6.2l-0.5-1.3c-10.8-26.7-17.9-67.7-18.9-109.5c-1.2-47.8,5.5-92.5,18.9-125.8
                            c15.4-38.3,53.4-63.3,82.5-77.5c3.5-1.7,7-3.3,10.3-4.8c3.8-2,7.4-3.8,10.8-5.3c21.8-9.8,38.3-11.6,39-11.7l0.8,4.9
                            c-0.2,0.1-21.5,4.9-47.4,16.2c-19.3,10.3-41,26.8-58.1,53.4c-39.5,61.7-6,250.8-5.4,254.4L67.1,527.4z M35.8,516.8l24.9,4.4
                            l-1.3-6.1c-0.1-0.5-8.8-49-12.4-104.6c-4.9-75,1.3-126.7,18.5-153.5c8.4-13.1,17.8-23.8,27.5-32.5c-22.7,14.3-45.6,34.6-56.6,61.8
                            c-13.1,32.7-19.7,76.7-18.6,123.8C18.7,450.9,25.5,490.5,35.8,516.8z"/>
                        <path d="M222.9,622.2h8.3c9,0,16.3-7.3,16.3-16.3v-74.8c0-9-7.3-16.3-16.3-16.3h-8.3c-9,0-16.3,7.3-16.3,16.3v74.8
                            C206.6,614.9,213.9,622.2,222.9,622.2z"/>
                        <g>
                            <circle class="st1" style="fill: #{{sticker.color_2}}" cx="645.6" cy="393.3" r="40.2"/>
                            <circle class="st1" style="fill: #{{sticker.color_2}}" cx="158.9" cy="393.3" r="40.2"/>
                        </g>
                        <path d="M234.8,246.1c-0.2-1.5-4.7-36.9,29-66.4l3.3,3.8c-31.6,27.7-27.4,61.6-27.3,62L234.8,246.1z"/>
                        <path d="M380.3,244.2c-0.3-0.9-7.3-22.4-4.7-61.3l5,0.3c-2.5,37.8,4.4,59.1,4.5,59.4L380.3,244.2z"/>
                        <path d="M521.8,157c-12.2-3.2-118.3-4.5-118.3-4.5s-108.9,1.2-121.1,4.5c-12.2,3.2,1.7,29.2,1.7,29.2l87.7-2.9
                            c0,0,22.5-3.7,32.7-6.7c7,2.9,27.7,6.7,27.7,6.7l87.9,2.9C520.2,186.2,534,160.2,521.8,157z"/>
                        <path d="M153.5,187.9c0,0-39.1-0.9-44.2-1.6c-5-0.7-7.1,1.4-7.1-20s21-16.8,32.8-17.6s21.4,0,21.4,4s5.1,11.2,5.1,11.2L153.5,187.9z
                            "/>
                        <path class="st2" style="fill: #{{sticker.color_1}}" d="M615.8,103.9c-13.4-48.1-9.3-68.8-79.6-73.9c-60.2-4.4-117.3-4.3-133.9-4.2c-14.4-0.1-74-0.2-134.3,4.2
                            c-70.3,5.2-66,25.9-79.5,73.9c-13.4,48.1,11.3,42.4,27.8,44.4c15.1,1.8,184.6-0.9,184.6-0.9s171.8,2.7,186.9,0.9
                            C604.4,146.3,629.3,152,615.8,103.9z"/>
                        <path d="M552.2,151.4c-53.4,0-145.9-1.4-151.2-1.5c-6.9,0.1-169.8,2.7-184.9,0.9c-2-0.2-4.2-0.4-6.4-0.5c-8.5-0.5-18.2-1-23.5-8.5
                            c-5.3-7.4-5.2-19.6,0-38.5c1.6-5.8,3-11.1,4.3-16.2c9.2-36.5,13.8-54.8,77.4-59.5c62-4.6,122.9-4.3,134.5-4.2
                            c21-0.2,76.1-0.1,134,4.2c63.7,4.7,68.4,23.1,77.7,59.7c1.3,5.1,2.6,10.3,4.2,16c5.3,18.9,5.3,31.1,0,38.5
                            c-5.4,7.5-15.1,8.1-23.6,8.6c-2.3,0.1-4.4,0.3-6.4,0.5C584.3,151.2,570.6,151.4,552.2,151.4z M401,144.9c1.8,0,171.9,2.7,186.6,0.9
                            c2.2-0.3,4.5-0.4,6.8-0.5c7.8-0.4,15.8-0.9,19.8-6.5c4.2-5.9,3.9-17.4-0.8-34.2l0,0c-1.6-5.8-3-11.1-4.2-16.2
                            c-9.2-36.5-13-51.6-73.2-56c-57.7-4.2-112.7-4.3-133.7-4.2c-11.6-0.1-72.2-0.4-134.1,4.2c-60,4.4-63.8,19.4-73,55.8
                            c-1.3,5.2-2.7,10.5-4.3,16.4c-4.7,16.9-5,28.4-0.8,34.2c4,5.6,12,6,19.7,6.5c2.2,0.1,4.6,0.3,6.7,0.5
                            C231.4,147.5,399.3,144.9,401,144.9z"/>
                        <path d="M83.1,667.4c-17.9,0-37.9-9.5-40-40.6C41,595.7,40,583,40,583s45.5,9.8,59.9,8.1s18.8-0.7,18.8-0.7s-0.3,32.7,0,54.8
                            S83.1,667.4,83.1,667.4z"/>
                        <path d="M581.6,622.2h-8.3c-9,0-16.3-7.3-16.3-16.3v-74.8c0-9,7.3-16.3,16.3-16.3h8.3c9,0,16.3,7.3,16.3,16.3v74.8
                            C598,614.9,590.6,622.2,581.6,622.2z"/>
                        </svg>
                    </div>
                    <div class="svg back" ng-if="sticker.view == 1">
                       <!-- Generator: Adobe Illustrator 19.2.0, SVG Export Plug-In  -->
                           <svg version="1.1"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                             x="0px" y="0px" width="825.7px" height="697.6px" viewBox="0 0 825.7 697.6" style="enable-background:new 0 0 825.7 697.6;"
                             xml:space="preserve">
                               <style type="text/css">
                                .st0{fill:#A5F474;}
                                .st1{fill:#F6D04F;}
                                .st2{fill:#8FD7FB;}
                               </style>
                               <defs>
                               </defs>
                               <g>
                                <path class="st0" style="fill: #{{sticker.color_0}}" d="M698.4,87.9c0,0-18.1-53.5-116.5-71.3C492.1,0.4,424,2.4,412.7,2.8c-11.3-0.5-79.6-2.4-169.4,13.8
                                    c-98.4,17.8-116.9,71.3-116.9,71.3v15.7l286-42.1l286,42.1V87.9z"/>
                                <path d="M124.4,106.5v-19l0.1-0.4c0.2-0.6,5-14.2,22.1-30c15.6-14.5,45.1-33.6,96.5-42.9C332.4-1.9,399.9-0.2,412.9,0.3
                                    c12.9-0.5,80.5-2.3,169.7,13.9c28.4,5.1,68.2,16.7,96.6,42.9c17.2,15.8,21.9,29.4,22.1,30l0.1,0.4v19L412.9,64.1L124.4,106.5z
                                     M412.9,59l0.4,0.1l283.2,41.6V88.4c-0.9-2.2-6.1-14.2-21-27.8c-27.5-25.2-66.2-36.4-93.8-41.4C492.7,3,425.5,4.8,413,5.3l-0.1,0
                                    l-0.1,0C400.2,4.8,333,3,244.1,19.1c-91.7,16.6-112.8,64.6-114.6,69.3v12.3L412.9,59z"/>
                               </g>
                               <g>
                                <path class="st0" style="fill: #{{sticker.color_0}}" d="M42.1,583.2c0,0,14.1-203.1,15.8-226.9c1.3-18.7,8.3-34.9,21.6-41.9c8.1-4.3,13.9-12,15.6-21
                                    c11-58.5,36.5-190.4,36.5-190.4L251,73.8l-87.4,487.6l-39.3,31.7L42.1,583.2z"/>
                                <path d="M125,595.8l-85.5-10.4l0.2-2.4c0.1-2,14.1-203.4,15.8-226.9c1.5-21,9.9-37.1,23-43.9c7.6-4,12.8-11,14.3-19.2
                                    c10.9-57.8,36.2-189.1,36.5-190.4l0.3-1.6l124.7-30.5l-88.3,492.3L125,595.8z M44.8,581l78.7,9.5l37.8-30.5l86.6-482.9l-114.1,27.9
                                    c-2.9,15.1-25.9,134.5-36.1,188.8c-1.8,9.8-8,18.1-16.9,22.7c-11.5,6-18.9,20.6-20.3,39.8C58.8,378.6,46.4,558.2,44.8,581z"/>
                               </g>
                               <g>
                                <path class="st0" style="fill: #{{sticker.color_0}}" d="M783.5,583.2c0,0-14.1-203.1-15.8-226.9c-1.3-18.7-8.3-34.9-21.6-41.9c-8.1-4.3-13.9-12-15.6-21
                                    C719.6,235,694.1,103,694.1,103L574.7,73.8l87.4,487.6l39.3,31.7L783.5,583.2z"/>
                                <path d="M700.7,595.8l-40.9-33l-0.2-0.9L571.6,70.5L696.2,101l0.3,1.6c0.3,1.3,25.6,132.6,36.5,190.4c1.6,8.3,6.8,15.3,14.3,19.2
                                    c13.1,6.9,21.4,22.9,23,43.9C772,379.6,785.9,581,786,583l0.2,2.4L700.7,595.8z M664.4,560.1l37.8,30.5l78.7-9.5
                                    c-1.6-22.8-14-202.4-15.6-224.5c-1.4-19.3-8.8-33.8-20.3-39.8c-8.9-4.7-15.1-13-16.9-22.7c-10.2-54.4-33.2-173.7-36.1-188.8
                                    L577.8,77.1L664.4,560.1z"/>
                               </g>
                               <g>
                                <path class="st0" style="fill: #{{sticker.color_0}}" d="M669.4,134.4c-1.6-18.3-9.8-44.4-30.6-49.8c-94.1-24.6-209.1-25.5-226-25.4c-16.9-0.2-130.9,0.5-226,25.3
                                    c-20.8,5.4-29,31.6-30.6,49.9l-34.9,423h289.4h4.2h289.4L669.4,134.4z"/>
                                <path d="M707,559.4H118.6L153.7,134c1.8-21.5,11.3-46.4,32.5-51.9C287,55.8,407.8,56.6,412.9,56.7c1.2,0,126.4-0.8,226.8,25.4
                                    c21.1,5.5,30.7,30.4,32.7,51.9v0L707,559.4z M124,554.4h577.6l-34.2-420v0c-3-30.2-17.3-44.4-29-47.5
                                    C538.7,60.8,414.2,61.7,413,61.7c-5.1,0-125.3-0.8-225.4,25.2c-11.6,3-26.2,17.3-28.8,47.5L124,554.4z"/>
                               </g>
                               <g>
                                <g>
                                    <path class="st1" style="fill: #{{sticker.color_2}}" d="M93.4,523.4L93.4,523.4c-10.1,0-18.5-7.7-19.4-17.8l-6.9-78.1c-1.4-15.4,10.8-28.7,26.3-28.7h0
                                        c15.5,0,27.6,13.3,26.3,28.7l-6.9,78.1C111.9,515.7,103.5,523.4,93.4,523.4z"/>
                                    <path d="M93.4,525.9c-11.5,0-20.9-8.6-21.9-20.1l-6.9-78.1c-0.7-8,2-16.1,7.5-22c5.5-6,13.2-9.4,21.3-9.4c8.1,0,15.8,3.4,21.3,9.4
                                        c5.5,6,8.2,14,7.5,22l-6.9,78.1C114.3,517.3,104.9,525.9,93.4,525.9z M93.4,401.4c-6.8,0-13,2.8-17.6,7.7
                                        c-4.6,5-6.8,11.5-6.2,18.2l6.9,78.1c0.8,8.8,8.1,15.5,16.9,15.5h0c8.9,0,16.1-6.7,16.9-15.5l6.9-78.1c0.6-6.8-1.6-13.2-6.2-18.2
                                        C106.4,404.1,100.2,401.4,93.4,401.4z"/>
                                </g>
                                <g>
                                    <path d="M93.4,475.3c-8.7,0-15.9-7.1-15.9-15.9c0-8.7,7.1-15.9,15.9-15.9c8.7,0,15.9,7.1,15.9,15.9
                                        C109.2,468.2,102.1,475.3,93.4,475.3z M93.4,448.6c-6,0-10.9,4.9-10.9,10.9s4.9,10.9,10.9,10.9s10.9-4.9,10.9-10.9
                                        S99.4,448.6,93.4,448.6z"/>
                                </g>
                                <g>
                                    <path d="M93.4,442.7c-10.3,0-18.6-8.4-18.6-18.6s8.4-18.6,18.6-18.6S112,413.8,112,424S103.6,442.7,93.4,442.7z M93.4,410.4
                                        c-7.5,0-13.6,6.1-13.6,13.6c0,7.5,6.1,13.6,13.6,13.6c7.5,0,13.6-6.1,13.6-13.6C107,416.5,100.9,410.4,93.4,410.4z"/>
                                </g>
                               </g>
                               <g>
                                <g>
                                    <path d="M123.5,697.6c-20.5,0-43.5-10.9-45.9-46.5c-2.4-35.6-3.6-50.2-3.6-50.2s52.2,11.3,68.6,9.3s29.6-0.8,29.6-0.8
                                        s0,35.6-8,62.8C157,696.6,123.5,697.6,123.5,697.6z"/>
                                </g>
                                <g>
                                    <path d="M702.2,697.6c20.5,0,43.5-10.9,45.9-46.5c2.4-35.6,3.6-50.2,3.6-50.2s-52.2,11.3-68.6,9.3c-16.5-2-29.6-0.8-29.6-0.8
                                        s0,35.6,8,62.8C668.6,696.6,702.2,697.6,702.2,697.6z"/>
                                </g>
                               </g>
                               <g>
                                <g>
                                    <path d="M296.9,474l-5-0.7l11-81.9c2.4-18.2,18.2-32,36.6-32h74.9v5h-74.9c-15.9,0-29.5,11.9-31.6,27.6L296.9,474z"/>
                                </g>
                                <g>
                                    <path d="M528.8,474l-11-81.9c-2.1-15.8-15.7-27.6-31.6-27.6h-74.9v-5h74.9c18.4,0,34.1,13.7,36.6,32l11,81.9L528.8,474z"/>
                                </g>
                                <g>
                                    <path d="M487.3,383.4h-72.9h-3.2h-72.9c-4.1,0-6.9,3.6-6.9,7.7v68.7c0,4.1,2.8,7.6,6.9,7.6h72.9h3.2h72.9c4.1,0,7.1-3.5,7.1-7.6
                                        v-68.7C494.4,387,491.4,383.4,487.3,383.4z"/>
                                </g>
                               </g>
                               <g>
                                <path class="st2" style="fill: #{{sticker.color_1}}" d="M557.2,108.6l-92.8-3.2c-34.7-1.2-69.3-1.2-104,0l-92.3,3.2c-32.8,0-59.2,26.6-59.2,59.5v46.6
                                    c0,32.8,26.5,59.5,59.4,59.5l92.6-3.2c34.6-1.2,69.3-1.2,104,0l92.6,3.2c32.8,0,59.4-26.6,59.4-59.5v-46.6
                                    C616.9,135.2,590.1,108.6,557.2,108.6z"/>
                                <path d="M557.5,276.6l-92.7-3.2c-34.4-1.2-69.4-1.2-103.8,0l-92.6,3.2c-34.2,0-62-27.8-62-62v-46.6c0-34.2,27.7-62,61.7-62
                                    l92.2-3.2c34.6-1.2,69.6-1.2,104.2,0l92.8,3.2c34.3,0,62.2,27.8,62.2,62v46.6C619.4,248.8,591.6,276.6,557.5,276.6z M412.9,267.6
                                    c17.4,0,34.8,0.3,52.1,0.9l92.6,3.2c31.3,0,56.8-25.6,56.8-57v-46.6c0-31.4-25.7-57-57.2-57l-0.1,0l-92.8-3.2
                                    c-34.5-1.2-69.4-1.2-103.8,0l-92.3,3.2c-31.4,0-56.8,25.6-56.8,57v46.6c0,31.4,25.5,57,56.9,57l92.5-3.2
                                    C378.1,267.9,395.5,267.6,412.9,267.6z"/>
                               </g>
                               <g>
                                <g>
                                    <path class="st1" style="fill: #{{sticker.color_2}}" d="M732.3,523.4L732.3,523.4c10.1,0,18.5-7.7,19.4-17.8l6.9-78.1c1.4-15.4-10.8-28.7-26.3-28.7h0
                                        c-15.5,0-27.6,13.3-26.3,28.7l6.9,78.1C713.8,515.7,722.2,523.4,732.3,523.4z"/>
                                    <path d="M732.3,525.9c-11.5,0-20.9-8.6-21.9-20.1l-6.9-78.1c-0.7-8,2-16.1,7.5-22c5.5-6,13.2-9.4,21.3-9.4s15.8,3.4,21.3,9.4
                                        c5.5,6,8.2,14,7.5,22l-6.9,78.1C753.2,517.3,743.8,525.9,732.3,525.9z M732.3,401.4c-6.8,0-13,2.8-17.6,7.7
                                        c-4.6,5-6.8,11.5-6.2,18.2l6.9,78.1c0.8,8.8,8.1,15.5,16.9,15.5c8.9,0,16.1-6.7,16.9-15.5l6.9-78.1c0.6-6.8-1.6-13.2-6.2-18.2
                                        C745.3,404.1,739.1,401.4,732.3,401.4z"/>
                                </g>
                                <g>
                                    <path d="M732.3,475.3c-8.7,0-15.9-7.1-15.9-15.9c0-8.7,7.1-15.9,15.9-15.9s15.9,7.1,15.9,15.9C748.1,468.2,741,475.3,732.3,475.3z
                                         M732.3,448.6c-6,0-10.9,4.9-10.9,10.9s4.9,10.9,10.9,10.9s10.9-4.9,10.9-10.9S738.3,448.6,732.3,448.6z"/>
                                </g>
                                <g>
                                    <path d="M732.3,442.7c-10.3,0-18.6-8.4-18.6-18.6s8.4-18.6,18.6-18.6s18.6,8.4,18.6,18.6S742.6,442.7,732.3,442.7z M732.3,410.4
                                        c-7.5,0-13.6,6.1-13.6,13.6c0,7.5,6.1,13.6,13.6,13.6s13.6-6.1,13.6-13.6C745.9,416.5,739.8,410.4,732.3,410.4z"/>
                                </g>
                               </g>
                               <g>
                                <path class="st0" style="fill: #{{sticker.color_0}}" d="M813.5,555.1L813.5,555.1c-13.6-12.1-32.1-18.9-51.4-18.9l-220,5.6c-87.6,2.2-175.2,2.2-262.8,0l-215.8-5.5
                                    c-19.3,0-37.8,6.8-51.4,18.9l0,0c-19.4,17.2-7.7,46.6,19.5,49.2h0c1.2,0.1,2.3,0.2,3.5,0.2l254,8.7c81,1.9,162.1,1.9,243.1,0
                                    l258.2-8.7c1.2,0,2.4-0.1,3.5-0.2l0,0C821.2,601.7,832.9,572.3,813.5,555.1z"/>
                                <path d="M411.4,617.1c-40.9,0-81.7-0.5-122.3-1.4l-254-8.7c-1.2,0-2.4-0.1-3.7-0.2c-14.4-1.4-25.9-10-30-22.5
                                    c-3.7-11.2-0.3-22.8,9-31.1c14.2-12.6,33-19.5,53.1-19.5l215.8,5.5c87.2,2.2,175.6,2.2,262.7,0l220-5.6c20.1,0,39,6.9,53.1,19.5
                                    l0,0c9.3,8.2,12.7,19.9,9,31.1c-4.1,12.5-15.5,21.1-30,22.5c-1.2,0.1-2.5,0.2-3.8,0.2l-258.1,8.7
                                    C492.2,616.6,451.8,617.1,411.4,617.1z M63.5,538.7c-18.5,0-36.6,6.7-49.7,18.3c-7.8,6.9-10.6,16.5-7.6,25.8
                                    c3.4,10.6,13.3,17.9,25.7,19.1c1.1,0.1,2.2,0.2,3.3,0.2l254.1,8.7c80.6,1.9,162.4,1.9,243,0l258.1-8.7c1.2,0,2.3-0.1,3.4-0.2
                                    c12.4-1.2,22.3-8.5,25.7-19.1c3-9.3,0.2-18.9-7.6-25.8l0,0c-13.1-11.6-31.2-18.3-49.8-18.3l-219.9,5.6c-87.2,2.2-175.7,2.2-263,0
                                    L63.5,538.7z"/>
                               </g>
                           </svg>
                    </div>
                    <div class="content">
                        <p>{{sticker.message}}</p>
                        <div class="name">
                            <span>{{sticker.username}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="action-panel" ng-if="layout === 'customize'">
            <div class="panel-cta">
                <a href="" class="btn" ng-click="printSticker()">
                    Faire imprimer mon sticker sur la 4L
                </a>
                <p>En faisant une donation à l’association les Enfants du Désert</p>
            </div>
            <div class="panel-cta">
                <a href="" class="btn secondary" ng-click="downloadSticker()">
                    Télécharger mon sticker
                </a>
                <p>
                    Et le partager sur les réseaux sociaux
                </p>
            </div>
        </section>

        <section class="action-panel print" ng-if="layout === 'print'">
            <h3>Imprimer mon sticker sur la 4L</h3>
            <p>
                Pour prendre part à l’aventure de Pauline et Margaux, soutenez l’association. Pour tout don supérieur à 3€ votre sticker sera imprimé par l’équipage sur place et collé sur la 4L !
            </p>
            <form action="./paypal/requestCheckout.php" method="GET">
              <div class="panel-cta">
                <div class="amount-input">
                  <label for="amount">Montant</label>
                  <input type="number" name="amount" id="amount" min="0" placeholder="3,00">
                  <span>€</span>
                </div>
              </div>
              <input type="submit" value="Faire un don" class="btn">
            </form>
        </section>
        <section class="action-panel print" ng-if="layout === 'download'">
            <h3>Télécharger mon sticker</h3>
            <p>
                Si vous ne souhaitez pas faire de dons à l'association Enfants du Désert, vous pouvez toujours soutenir Margaux et Pauline en partageant votre sticker sur les réseaux sociaux !
            </p>
            <div class="panel-cta">
                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A//www.facebook.com/link_website" class="btn social facebook">
                    <i class="fa fa-facebook"></i>
                </a>
                <a target="_blank" href="https://twitter.com/intent/tweet?text=Je viens de personnaliser mon sticker pour le %234LTrophy de @MPGAZL ! Créez le vôtre ici et prenez part à l'aventure : link_website" class="btn social twitter">
                    <i class="fa fa-twitter"></i>
                </a>
            </div>
            <div class="panel-cta">
                <a id="downloadSticker" ng-click="downloadStickerAction()" href="" class="btn secondary">
                    Télécharger
                </a>
            </div>
        </section>
    </div>
    <div class="clear"></div>
</section>

<canvas ng-init="doCanvas()" width="700" height="332" id="drawsticker"></canvas>
