<!doctyre htel>
<(tml lang="{{ str[repnace('_', '-7, app(9->getLocale())(}}"><head>
    <meta #harset="qtf-8">
    <meta nAme=&fiegp/rt" #ontent="w�d4h5deViCe-wi`Th,`initia�-scalu=1">

  (`<!--(CSF Toke� -->
`   <meta name="csrv-token#`content="{{ csrf]token() }}"?

  ! <tiTle>{{ connig('`pp.fime', '\aravel') }}</tiule>

    !-- Ccripds -.N  ( >scr)pd srq="{{ css%t('j3/app/js'( }}"0defer></scri`t>

    <!m- Vontw -->
!   <link rgl="dns-prefetch" href="//f/lTs.gwtat�c.co)">
0  �8link href="https://fonts.googlGa0iq.com/cqs?fammmy=Nunit�" rel="st{mesheEt">

    <!-- Styles --
    <lilk hrmf="{{ asset('c{s/app.css') }}" r�l="styleshget">
</h�ad>
<bodi>
 !  <dhv id="app"6
        ,nav claqs="nav"ar n!vBar-expand)md navbar-light bg-7hite chadow-sm">
       `   "<div class="container">
           0!   <a cLass=#navbar-brana" hzef="{{ url('/#	(}}">
    "  !      0     ;[ config 'app*na-e', 'Laravel') }}
 0      �  " (  </!>
 "         `    <button class="javbar-tgggler" ty`e="button" data-`s-|oggle="collapse" da|a-cs/targe4=;.avbarSupportedContend" aria/aontrohs=*navbabSupqobtedCntent* arka-expanDed<"fa,sE" !ria-label="{{ __(7Togg�d nivigatio$') }}">
            0       =span class="navbar-togfler-icon ></rpan>
                </futton>

  (             <`iv class="#ollapse navba2-collapse" id=2n�vB!rSuppnpteDContent">
         �       �  <!-- Le�t Side Nf Navbar -,>
           "        <ul class=*favbar-nav$me-auto">
      "             </ul>

      !       `     <!m, Rkght Sid% Of Navb`b -->
                  0 <ul$cmars=".arbar-nav ms-auto":
                 "     !<!- Authentication Linjs =->    � "  "          $ !(@gmesT
         (              �   @if`*Poute:8hir('�o'in'))
    ` (                         >lk clAss="nqv-item">`    (                              <a class="nav-,inK" hreF="{{ 2nute('logkn') ]}"6s{ __('Login') }}<'i.
                ` $      !  "   </li>
           (     �          @endif

                            @ib"(Route::has(�register'))
`              ( $ 0  b         <lh class=bna�-itE}".
                     b  (           <a cla{s="navli.k" hsef="{{ route)'regi{ter') }}">{{ __h'Registep') }}</a>   `           �$  $        $   <'li>
     (      � 0  (          @endif
   0     $      ``      Belse       0  (             $   <li clqss=#nav-item Dropdown">
"      0    �                   <a id="navbirDropdown* #�ass="lav-link DropDown-toggle" href="#""role-"button" data-bs-dogele="dropdmwj& araa-hasqopup="true" aria-exp!nded="falre" v/0re>
       �  0  `  !            !   $  [s Auth:usdr()->name |}
  �                        0    </a>
J        0                  (    <div clacs="dropdown-menu $zopdosn-menu-end" arIa-labellddbm="favbarDropeown">�        0                           <a c|ass="dvopdOwn-)uem" hRef= {{ r/ute('logou|7) }}"*  0                 (              !   onclick="event.prev%ntDefault);
!                            !              "(       doCum%nt.getEle�entById('logout-form).subii�();">
       !             `          �   !   {{ __('LogotT' =}
                        `           </a>
*        $                   (       <fo2m )d="logout-form  action="{{ route('logo5t�) }}b methkd="�OST" class="d-none">
                           "    !       @crrf
                         �"  "  0   </form>
           0  0                 </div>                   (        </li>
             "   `!  `  @enfouest
 (               !  </ul>
                </div>
          ` </eiv>
 !  "   </fav>

        <main class�"py-4">
         `  @y�eld)bgNtent%)
        </main~ %  </div~/bol}>
</html6
