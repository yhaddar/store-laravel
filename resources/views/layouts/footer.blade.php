<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto&family=Ubuntu:wght@300&display=swap');.footer-store{width: 100%;height: auto;background: #2a2478;color: white;padding-bottom: 20px;}.main-footer{width: 100%;height: 279px;display: flex;justify-content: space-evenly;padding-top: 20px;}.section1{width: 22%;height: auto;}.logo-footer{font-size: 32px;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-weight: bold;font-style: italic;margin-bottom: 10px;}.description-footer{font-size: 13px;font-family: 'Ubuntu', sans-serif;font-weight: bold;font-style: italic;}.ul-category, .ul-links, .ul-contact{width: 20%;height: auto;}.top-category, .useful-links, .contact{font-size: 25px;font-family: 'Roboto', sans-serif;text-transform: capitalize;margin-bottom: 25px;display: block;font-weight: bold;text-align: center;}.li-category, .li-links{font-size: 18px;font-family: 'Roboto', sans-serif;margin-bottom: 4px;margin-left: 32px;transition: .9s ease-in-out;cursor: pointer;}.li-category:hover, .li-links:hover{text-decoration: underline;margin-left: 47px;}.link{color: white;text-decoration: none;}.div-links{display: flex;justify-content: flex-start;}.li-contact{display: block;margin-bottom: 4px;}.icon-contact{margin-right: -20px;}.name-links{font-size: 14px;font-family: 'Roboto', sans-serif;margin-bottom: 4px;margin-left: 32px;transition: .9s ease-in-out;cursor: pointer;}.name-links:hover{text-decoration: underline;margin-left: 47px;}.hr-footer{width: 32%;margin-left: auto;margin-right: auto;}.copyright{font-size: 14px;font-family: 'Roboto', sans-serif;margin-bottom: 4px;margin-left: 32px;text-align: center;margin-top: 20px;}@media screen and (min-width: 320px) and (max-width: 900px){.main-footer{height: auto;flex-direction: column;}.section1{width: 96%;margin-left: auto;margin-right: auto;padding-bottom: 20px;margin-bottom: 20px;}.ul-category, .ul-links, .ul-contact{width: 96%;margin-bottom: 20px;padding-bottom: 20px;margin-left: auto;margin-right: auto;}.hr-footer{width: 100%;}}
</style>
<footer class="footer-store">
    <main class="main-footer">
        <div class="section1">
            <h1 class="logo-footer">store</h1>
            <p class="description-footer">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto reiciendis sunt ut alias voluptate amet laudantium est ea veritatis repellat quam sequi dicta vero maiores illo, repudiandae temporibus obcaecati voluptas omnis eaque tempore officia blanditiis? Ratione repudiandae nesciunt necessitatibus incidunt magnam ad, facere cum reprehenderit blanditiis eum tempora possimus qui?</p>
        </div>
            <ul class="ul-category">
                <li class="top-category">top categories</li>
                <?php $categorys = ['Mode Femmes', 'Informatique', 'Mode Homme', 'Sports & Loisirs'] ?>
                @foreach ( $categorys as $category )
                    <li class="li-category">{{ $category }}</li>
                @endforeach
            </ul>
            <ul class="ul-links">
                <li class="useful-links">useful links</li>
                <?php $links = [
                        ['name' => 'shop',           'link' => '#'],
                        ['name' => 'cart',           'link' => "#"],
                        ['name' => 'login',          'link' => '#'],
                        ['name' => 'privacy policy', 'link' => '#']
                    ];
                ?>
                @foreach ( $links as $link )
                    <li class="li-links">
                        <a href="{{ $link['link'] }}" class="link">{{ $link['name'] }}</a>
                    </li>
                @endforeach
            </ul>
            <ul class="ul-contact">
                <h1 class="contact">contact</h1>
                <?php $contacts = [
                        ['name' => '766 Waverly St Framingham,Massachusetts(MA), 01702', 'logo' => 'pin'],
                        ['name' => '+508 875-4756', 'logo' => "call"],
                        ['name' => 'moyeigoimmumu-2612@yopmail.com', 'logo' => 'mail'],
                    ];
                ?>
                @foreach ( $contacts as $contact )
                    <li class="li-contact">
                        <div class="div-links">
                            <ion-icon name="{{ $contact['logo'] }}" class="icon-contact"></ion-icon>
                            <span class="name-links">{{ $contact['name'] }}</span>
                        </div>
                    </li>
                @endforeach
            </ul>
    </main>
    <hr class="hr-footer">
    <div class="copyright">©️yhaddar <?php echo date("m/Y") ?> </div>
</footer>
