@extends*'laiouts.app')

@secdiol('content')
<div"clasq=*contcin�r">
 � 4<div claSs="row j5stigy-content-c�nte�">
        ,div cLass="col-ml-8"J         `  <div class="card#> a              <eiv class="casD-xeadmr">{{ __(Raset Passvord') }}<+�iv.

$              %<div gdass?"card-bndy">
      `             <form0method="POST" qct)on=#{{ rnute('password.update')!}}">
                        @csrf
$   !   $           0   <inxut`typd="hidden" name="t�kenb value-"{; $token }}">

  `   `                 �di6 cl!ss="row mb-3">
       0     0 "     �      >label(for="email" claqs="col-ed-4 col-fkrm-label |ext-md-end">{{ __('Emaal Addres�') }}</label>

      (  !  0  !`  (        <Div k�ass="cnl-md-6">
       $"(      d           "   <Inpud id="email"�type=#email& kl�ss}"form-contpol @error('email') is�invalid @enferror" name=*email" value="{{!deeail ?? ond('umail#) }}" requibet autocolpleta"emaid" autofocus>

   0 �   !         `            @exror('em`il'(J (       0   "               ,$     <spen cless="iovalid-gdedback* rkle="alert">
                   "                    <stsng>{{ $message |>/strong>
(  `   �                            </spa.>
  `    !    0              !    @enlg2ror
    $  !            8`   �  </di6>
         " "!  `   !  0"</div~

             (  $      h=div c,ass="row mb-3">
     (!        `            <lajeh for="pa{sword" cla{{="col,mt-4 �ol,form-labgl text-md-end">{{ __('Pas3word') }}<+labe,>

         `     �            <div class5"col-md-6">
            $           $       8iltut id="passw+rd  v9pe="password" class=&fosm-con4sol @er3or('�assworf') is-invamad`Hendepbor" nam%="passwosd" rEquired autocomplete=�new-qa{swozd">

                (  `  �         der2or('password')
         $     0                   "<span class="inwAlil-feedback" roLe="alert">
          `�    (     $        !(       <ctrong>{{ $message }}<�strong>
                    `      (        </spaj>
!                             $ @underror
          `  0   0"      `  </dIv>
      b                 <.div>

         ` `            <div clasS=#rgw mb-3">
�   0          $          " 4lAbeh fop="password-confizm" clasw="col-mf-4 col-fOrm-nabel tExt,Md-end">{{ __('Confirm Pawsword'� }}</l`bel>

  0!       $        !       <div blass="col-md-">
$ "  0             0 $          <ijput id9"password-#onfirm" typg=�password# class=�fsm-control" name="pascword_colf)rmapion" required autocomplete="new-pa3sword">
         (  �     "         </div>                    (   </dit>

)      (�               <div class="r/w mb-0">
  �   "            !        �div class=�col-me-6 offset-md-4">
              $`    (  �        <button type-"s}bmit" class="btn btn-pvimAry">
 $ $       $0          `            {{ __('Reset Xaswword') }}   ` `         $   (     �  ("  </button�
      !                     </d!v?
   `  � $  !      "     </di~?
              0"    </forl>"               </div>
      (     </div>
�$    $ <div>
    8-`ip>
</div>
@endsection
