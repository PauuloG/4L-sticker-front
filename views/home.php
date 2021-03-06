<section class="home-template">
    <div class="content--left">
      <div class="left--container">
        <div class="vCenter">
            <div class="left--info">
                <img src="./assets/img/4l-home.png">
                <span>Pauline, Margaux, et leur bolide.</span>
            </div>
            <div class="right--info">
                <h1>Soutenez l’association a et participez à l’aventure du 4L Trophy</h1>

                <p>Depuis 11 ans, l’association <a target="_blank" href="http://enfantsdudesert.org/">Enfants du Désert</a> organise le <a target="_blank" href="http://www.4ltrophy.com/">4L Trophy</a> : tous les ans, c’est plus de 1500 équipages qui sillonnent à bord de leur 4L 6300km de routes et de pistes à travers l’Europe.<br />
                Le 18 Février,<a target="_blank" href="https://www.facebook.com/mpgazl">Pauline & Margaux</a>sont parties le coffre rempli de fournitures scolaire qu’elles distribueront aux enfants marocains pendant 10 jours. Prenez part à leur aventure !</p>

                <p>Pour participer, deux solutions : créez votre 4L personnalisée et affichez-la accompagnée d’un petit message sur la voiture de l’équipage. Vous pouvez également soutenir directement l’association en faisant un don.</p>

                <a href="/sticker" class="btn">Créer mon sticker</a>
                <a href="/don">Faire un don à Enfant du Désert</a>
          </div>
          <div class="clear"></div>
        </div>

        <footer class="main-footer">
            <p>Copyright© <?php echo date('Y'); ?> | <a target="_blank" href="/CGU">CGU</a></p>
        </footer>
      </div>
    </div>
    <div class="content--right">
        <div class="right-scrollable-zone" ng-init="checkScrollTop()">
            <div class="instaFlux--height">
                <div ng-repeat="day in instagramFlux">
                    <header>
                        <h2>{{day.name}}</h2>
                        <span class="hashtag">#MPGAZL</span>
                    </header>
                    <div class="instagram-flux">
                        <article ng-repeat="picture in day.pictures">
                            <a target="_blank" href="{{picture.url}}">
                                <img class="playBtn" ng-show="picture.type=='video'"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACrElEQVR4Xu2bzXnTQBCG38kJ50QJUAFwtHKADigBpwLkDuwKkDqIO0gHiQ/ER0IFJB0kF44sz1o2lgy2Vz8r7Q865pl1NK/2+zS72hEOXGrFJ36RIrxdhyjuEW4RchnzcGicb3+X/RtW33jJT27+JP6vjBRXnDEPAcTfAO7IgM8nn6TiiTMyXpDLO55OxjsaUAGgVrxC8aPmvT4gzGTMouY4J8KrAO5IgS8N70z7g5bFbcPxgwyrAvjKNcLHVnfimT/szwD99N63AlC8MbzxBzsAdgSd9wfbALYonPWHvgAUILQ/nDN16bXZL4CSP8iYeWuv6eAH+gdQ9geYSsJ1B3k0/okhAez8QTGVC+4bZ9FioAsABvUHdwAM5A9uARjAH1wF0Js/uA7Auj/4AcCiP/gDoLq+uOxq2e0jgPL6QoNotT/pM4AtiIwR86brixAAFPsPelsuIa9bFIYBoIU/hAagtj+ECsDYH0IHsPWHy0PL7vAB7Pwhk4TpvknGBAAEXTdclSHEBUBnLrwuF0/xAYBckvUXsPUVI4ClJHz4DyDiGRC5BKI2wchfg5WpH5MJPgOTWEvhnBGzY5slodYBS4SJyXZZaAAeN4kbn1MKBYDWud4S00f8al0hADip82NEfAZgrPPQANTWeSgAnlFkcsGslshPBPsigQUj0qYfP3yeAUsUqc3jM67OgEcg7eMAlWsArOjcFwlY07nrAKzr3FUAvencNQC969wlAIPo3AUAum7XfUXGy9Quq70hAei6XSde+R7XV3Im/8dWHbDWOedkNspXk8RMY6oAumiagsXmqbc6vWWaQNu4/RnQpm3OWZ2be0CzxknndW4MQAcq09ZZ8Ebn9QAUzdO6y+vNkYFe6bwWgG2wWjHZtM8XIBTfN+3zmcl+e1tz6mv8b2ZcWVDWxJuSAAAAAElFTkSuQmCC"/>
                                <img ng-src="{{picture.thumbnail_url}}" alt="">
                                <div class="caption" ng-hide="picture.desc==''">
                                  <p>{{picture.desc}}</p>
                                </div>
                            </a>
                        </article>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="is-scrollable">
            <span>
                <svg version="1.1"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                     x="0px" y="0px" width="6.4px" height="35.4px" viewBox="0 0 6.4 35.4" style="enable-background:new 0 0 6.4 35.4;"
                     xml:space="preserve">
                    <style type="text/css">
                        .st0{fill:#FFC600;}
                    </style>
                    <defs>
                    </defs>
                    <circle class="st0" cx="3.2" cy="3.2" r="3.2"/>
                    <circle class="st0" cx="3.2" cy="18.2" r="3.2"/>
                    <circle class="st0" cx="3.2" cy="32.2" r="3.2"/>
                </svg>

                <!-- <p>Voir les jours précédents</p> -->
            </span>
        </div>
    </div>
    <div class="clear"></div>
</section>
