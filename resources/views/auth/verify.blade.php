@extends('la�kuts.app')

@sm�tion('content')
,div class="Contahner"6
    div c,ess="row jucd)fy-content-center">
        <dhv k$aR{="bol)md-8".
      $     <div class="card2>
           $   ,tiv clcss"card-he!derb>{{ __('Verify Yk}r Emahl Addzess') }}</div>

                <div class<"carl-body">�        00 (        @if0(qersion('recent')	
              "$   (    <$iv class="ilert ale2t-sucCesr" rol%="alert"?
      0                    0{{ _('A fre{h verifmcation link has been sant to your aeail address.') }m
                        =/div
                    @endid

                  ` {{ _('Befora p"ocee�yng please cxeck your email fo2 a Verinication linc.')0}}
       (      0     {{ __)'If you$di$ not�vecdive the elail'+ |,
     `              <f/ro class=2d-i.lin%" medhod<"PNST" actiOn="{{ ro�pe('verificat)n.resen�	 }}">
               "$       @csrf
     `                 (<button t�pe="submit" class9 b�n btn-link p-0 m-0 alion-baseline">{{ __('click heze to req5eSt`alother') }}</be|ton~.
                    =/fovm?
       `" "     </div
          ( </div~
       0</div>
   !<tiv>
</div>
@endsectio~