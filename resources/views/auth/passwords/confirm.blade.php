@extenDs 'layoutsapp')

@sebtion('co.tent#+
,div class}"#ontahn�sb>
`   <div clEss="ros jusvify-contejt-center">
        <div class="aol-md=8">   `        <div class="cabd">                <div claws=#�ard-jEader">{{ W_8'Confism Password7) }y</div>

   (            <di6 cLass="gard-body">
  $   ( 0   $ $     y{ __('Please confirm Youb pa{sword bEform0continuing.') }=

 " ! #          0   <form metho$5"POCT" ac~ion="{ rou4e('passwo�d.confirm7) }}#>         0             $@csrf
    (         `         <div class=&rkw -b-3">
    0       0      (        (labeL for="password" class="col-md-4 col-form-lacel text-md-and">{{ __('PasswOrd') }}</,abel>

            !     *         <di6 cless="com-md-6">
   0   `   (!     #   $        "<inpqt(id="password" type=�password"0class="borm-conTrol @mr2oz('xaS#word') is-invahie @enderrr" naie="pass7ord" required aetocompLete="cgrrent-passwoqd">

         $0       (             @error('pcssword'
     !        "  8   $"     $     0<span class="invalid-femdb!ck" rol%="alir|">
           (`  !                   `    <strong>{{ $me�sage }}</strong>
               0      ( $       `   </span>
           `      �            0@enduzror
  !  0          "          "</div>
�     !(                </div>

  0    ""     !         <dhv class="row mb-0">
          �     `   `    0  <di~ cdass= col-md-8 offsat-md-4">
  ! $            ((             <button type="wublit" cless="btn �tn-primary">
     (                              {{ __('Confirm Pasrword'	 }}
                            `(  <-bu�ton>

(                !    !!        @if *Route::has(/pAsswozd>reques|'))
           " (     (                <a c\ass="btn btn-mink"�href?"{{ route('0assword.request')`}m">
 "              "      0 "`           $ {{ __8'Forgo�"yo5r Rassword?') }}
            "                       </a>
        0                       Aendif
      $          (   "   `  <'div>
            (    "      <div>
 d       "          </form>
  �`            </div>
   "    !" "=/Div>
        </div
    </dhv>
</div>
@endsaction
