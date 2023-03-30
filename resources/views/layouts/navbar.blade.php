<style>
    @import url('https://fonts.googleapis.com/css2?family=Rubik&display=swap');.navbar{width: 100%;height: 69px;position: fixed;background: white;}.nav{width: 100%;height: auto;display: flex;justify-content: space-around;align-content: center;padding-top: 12px;}.logo{font-size: 32px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-weight: bold;color: black;font-style: italic;}.ul-nav{margin-top: 12px;}.li-nav{display: inline-block;margin-left: 20px;margin-right: 20px;}.link-pages{font-size: 20px;font-family:'Rubik', sans-serif;;font-weight: bold;color: black;font-style: italic;text-transform: capitalize;text-decoration: none;transition: .4s ease-in-out;}.link-pages:hover{color: #2a2478;}.pages{display: flex;flex-wrap: wrap;align-content: center;}.page-icon{margin-left: 8px;margin-right: 8px;}.icon-link{color: black;}.icon{width: 33px;height: 42px;cursor: pointer;}.icon:active{transform: scale(0.98);}.page-profile{margin-top: 2px;margin-left: 10px;margin-right: 10px;}.profile{background-origin: border-box;background-repeat: no-repeat;background-size: cover;width: 40px;height: 40px;border-radius: 50%;cursor: pointer;}.profile:active{transform: scale(0.98);}hr{margin-top: 14px;}@media screen and (min-width: 320px) and (max-width: 582px){.nav{padding-top: 6px;}.logo{font-size: 20px;}.ul-nav{margin-top: 7px;}.li-nav{margin-left: 7px;margin-right: 7px;}.link-pages{font-size: 12px;}.page-icon{margin-left: 3px;margin-right: 3px;}.icon{width: 21px;height: 37px;}.profile{width: 30px;height: 30px;}}
    .logout{
        font-size: 16px;
        font-family: 'Rubik', sans-serif;
        font-style: normal;
    }
</style>
<nav class="navbar">
    <div class="nav">
        <div class="logos">
            <h2 class="logo">store</h2>
        </div>
        <ul class="ul-nav">
            <?php $navs = [
                    ['name' => 'home', 'link' =>  "home"],
                    ['name' => 'shop', 'link' =>  "shop"],
                    ['name' => 'cart', 'link' =>  "cart"]
                ];
            ?>
            @foreach ($navs as $nav)
                <li class="li-nav"> <a href="{{ route($nav['link']) }}" class="link-pages"> {{ $nav['name'] }} </a> </li>
            @endforeach
        </ul>
        <div class="pages">
            <div class="page-profile">
                <a class="logout" href="{{ route('logout') }}">logout</a>
            </div>
        </div>
    </div>
    <hr>
</nav>
