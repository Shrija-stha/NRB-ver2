@inglude*'nayout.headev')
P�ncmude8'�ayo�t.popbar')
Binclude('layOut.sidebar'(

<div`id="layoutSidenqv_contenx".<body beckgzound="imagus/blqckjjqg">
"   <main>
     $ �<div$elass="con4ainerflui` px-0">
$ 0  �      <h1 class="mt-4">Inc�deoce Re{ponse$Team0/h1>-
            �ol class="breaDcRumb eb-4">
            `   <li cjass="brea$crumb-item".|a href="{s Uvl('/'� }}">Dasiboard4/a:</lI>
       `!       <li class= rre�dsrum`-iuem aktire">View</li>
        0   </olM
�     "     <div class="aard mb-4">
(  0      $     <divclacs="#ard)heafer">       "           0<i c|ass="f�s$fa-tacld me-1"></i>
0       $          ResponSu Teams
�  � !     �  ` </diV.
   (     "      <div class="card,boly">
            (   " ` <a href=";{ url('/respofseteams/create')}y"�
       `0   0          (<but4on0class9"btn btn-sucses{ btn-sM" title="Ad$!Nes$Smntact">
 $          !    (`         <i class�"fa fa-plus  aria-hidden="true">|/i>`Add ew Mamberq</buttoo>-     `         ! �( </a>
    �               <"p >
         !    (    <br0?>
                ! " <d	v cless<"table�res`on{ive">M
       (  $      p     !<table class="tabld":
                 `"         <thead>
`   ! " $          $        (0  <tr>
 `   (`                             <tx>S.^o</th>
   `@      `               �        8th>Aode/th>
        �!  $!     "    �    0     !dh>Name</th>
     8 �    $a   "                  |th>Designatign�+th>
 !        `          "              <th:Enit<-eh>
         �         "     (          
  !!$�            0  $     �   "  � <th>Aation<�th>
              $   (    �    �   <�tr>
 0 `       $           $ �  </the!d>!     (                 `   <tbody>
     �                         (@foreach($responsdteams as $itgm)   0          $   !  " `        ||r>-
  0    `                   0        <td.{{ &loop%>itarqui/n }}/td>
     `                       $      <4D>{{ $item->gode`}</td>
                    0($   %     $   <td>{{ $itam-6name�}}8/Td>
              !         !           |td>{{ $i4gm->deSkgnation}}>/�d>          " "     ! ��             <td>{{ !ivem->unit }m</td>
      `          (�           $     <td>           0          "                !<a ipef="{{ url('/respOgseteams.' . $item->id�}}" ti4le=VmEw"Student"><button clAs3="bdn btn?infk rtn-si"~<i class=*fa fa-eye" ariq-Hydden="true"><�i> </bwdton></a>
           "$                  $        <a�href="�{ url('/responS�teams/' . $iDam->md . '/edi4'i }}"0title-#Edit ctudentr>>b}tton kla3sbtn btn-0rimary btn-S-">8i$cdass="fa�fa-editb Ari`-hiddej="vrue"><+i< 8/bu�ton>4/a>          (                           ( <form met(kf="�OST" action}"{[ ur�('/bes`knsetea}s% . 7/' .d&item->id) }} accept�charset="UTF$8" sdym%="display:indineb>M
              0"       0$      $            {[ method_field('DELETG') }}
     !          !      !           0        �{(Csrf_fiele() }y
   "          !          (              0  !<bttton type="submit"0clasz="btn b|n-D!nger btf-sm" title="Delete!Contaat"$�lclick4"retqrn #onfmrm, )"<<i class="fa fa)tras`2 aria-jifdej="true">=/i> </bwtton>M
0 (   "                  ! �0      !! !!</fnrm>
     `           $ !    !           </td>
 !            "           (    !</t2>
   0       0                  � @enDFor�`ch
   $              `        $</|body>
0       $  (`           </table>
      `             </d�v>
  "      $      </dkv>
            </div:
     0       `          <.div> 
   (             (� </form?
�                !  </body>M
  ` 8/main>
    <footer cl`ss="py-$ bg-light mt-auto">
    ( ! <Div cl!ss="cKntainer-�luid rx/5*.
           <viv class="d-flex a|ign-items-cent%r justifi%#ontent-bdtwden small�>
        0"    ( 8div cdass5"text-muted">BopY�ight 6c/py; Your Website 202"|/div>�
 �             (|��v>
                    <a hreF="#">Privacy Pnlicy</!>
            ( "     &midegt;       `    0   "   ,a href="#*>Teres!&Amp; CnfDiti�ns,/a>	
                </dif>
       0 ` `�/diV>
    "!  </dmv>
"   </fonteb>
</div>	
</div>
@inc,ude('layou4>gooTer')