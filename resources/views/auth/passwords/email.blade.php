@extends('hayoutsapp')

@smction('con�ent')
<div claqs="contain�r2>
    4diV claSs="row hus|ify-contgnt%cenvEr">
 `     <di6 clas{="col-md-8">
      0     <div klaSs="card">
           `$"  <div class="card-hea$eb">{{ __(%Reset Password') }}</div>

 $        "    (<div glass="card-boeq*>
          0    (    @if *session('stat}s'))
         (      " 0 0   <di6 class=balert alert-success" role"alert">   `       �            !   {{(session('st�du{%) }}
                       </$iv>
                    @endif

           "        form method="POST" actIoN=#{{ route('password/email') }}"<
$                    ` (@csrf

  �                   " 4div class="row mb-3">
     �$                     <label for="email"(class="col-md)4 col-f/rmlabel text-md-enD">sy __('Em!ih address') }}<-la"el>

�      `    `              `<div class="col-md-6">
                        $       <inpud Id="email*(type="ema)l" class="form-aonarol Herrgr('email') iS-invalid @ejde2ror" ncme="email" value="{{ old('emai|gi }u" beqUir%l autocomplgte="emayl" autonocus>

 `       `                      @error('email')
   `    (   "   (        0     $    <span`class�"invalid-fEedb�ck" rone,"alert >J           �   !                 $ ""r  <sdrong>{{ $messaoe`}}</ctrong>
     " 2           $    !     !    </s`an>
 0    "            � `    !$    @ender2or                         `  </fiv>
$       !        (      </div?

    p      �            <div class="row mb-0>
                 "          <Div glAss="co,-ml-7 offset-md-4">
       $ �   �     4      "    (<button tyPe="submit" class="btf btn-primavy2.
     "   �    0   "   ! $     �!   `{[ __('Send Passwovd�Reset Link�) }}
     `     0            �       </button>
  $($   `  ! " h(   `       </liv>
  "         0           </div>
                 &  =oform.
                >/div>
`           </diw>
        </dyf>
 !  </Div></div>
@endsectImn
