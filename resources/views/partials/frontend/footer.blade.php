<footer>


    <div class="bg-blue-900 ">
      <div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mx-auto py-8 ">

        <div class="space-y-4 mx-auto text-center">
          <a href="{{ route('refund') }}" class="text-base lg:text-xl font-semibold text-white">Refund policy</a>

        </div>

        <div class="space-y-4 mx-auto text-center">
          <a href="{{ route('terms-and-conditions') }}" class=" text-base lg:text-xl font-semibold text-white">Terms & Conditions</a>

        </div>

        <div class="space-y-4 mx-auto text-center">
          <a href="{{ route('privacy') }}" class=" text-base lg:text-xl font-semibold text-white">Privacy Policy</a>


        </div>

        <div class="space-y-4 mx-auto text-center">
          <a href="{{ route('revision') }}" class=" text-base lg:text-xl font-semibold text-white">HTML Sitemap</a>

        </div>

      </div>

      <div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mx-auto md:py-0 md:pb-5">

        <div class=" mx-auto text-center ">
          <img src="{{asset('imgs/footer-logo.png')}}" class="h-16">
        </div>

        <div class="space-y-4 mx-auto text-center">

          <div class="space-x-4 pt-4">
            <a href="https://www.facebook.com/4dollaressay/" class="text-4xl"><i class="fa fa-facebook-f text-white"></i></a>
            <a href="https://www.instagram.com/4dollaressay/" class="text-4xl"><i class="fa fa-instagram text-white"></i></a>
            <a href="https://twitter.com/4dollaressay" class="text-4xl"><i class="fa fa-twitter text-white"></i></a>
            <a href="https://api.whatsapp.com/send/?phone=0012243385225" class="text-4xl"><i class="fa fa-whatsapp text-white"></i></a>
          </div>
        </div>

<div class="space-y-4 mx-auto text-center">

          <div class=" flex flex-col justify-center md:gap-4 sm:flex-row ">

            {{-- <a href="{{ route('ca.flag') }}" > --}}
                <a href="https://ca.4dollaressay.com/">
            <img src="{{asset('imgs/canada.png')}}" class="h-16">
            </a>
           <a href="https://au.4dollaressay.com/">
            <img src="{{asset('imgs/australia.png')}}" class="h-16">
            </a>
          </div>

        </div>

        <div class="space-y-4 mx-auto text-center my-4 md:my-0">

          <div class="text-center">
            <a href="tel:(001)224-338-5225" class="text-base lg:text-xl text-white font-semibold">
                <i class="fa fa-phone mr-2"></i>(001)224-338-5225</a><br>
            <a href="mailto:info@4dollaressay.com" class="text-base lg:text-xl text-white font-semibold"><i class="fa fa-envelope mr-2"></i>info@4dollaressay.com</a>
         </div>
        </div>

      </div>
    </div>


   <div class="">
      <div class="container grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 mx-auto py-4 text-center md:text-left ">

        <div class=" ">
          <ul class="list-none   text-base pt-5">
             @if(!empty($services))
                    @for ($i=0 ; $i<=10 ;$i++)
                    <li class="py-1">
                        <a href="{{ route('services.show',$services[$i]->slug) }}" class="footer-link hover:underline hover:underline-offset-1"> {{ $services[$i]->name }} </a>
                    </li>
                    @endfor
                    @endif
        </ul>
      </div>

        <div class=" ">
         <ul class="list-none text-base  pt-5">
            @if(!empty($services))
                    @for ($i=11 ; $i<=21 ;$i++)
                    <li class="py-1">
                        <a href="{{ route('services.show',$services[$i]->slug) }}" class="footer-link hover:underline hover:underline-offset-1"> {{ $services[$i]->name }} </a>
                    </li>
                    @endfor
                    @endif
        </ul>
      </div>

        <div class=" ">
         <ul class="list-none text-base mb-10  pt-5">
            @if(!empty($services))
                    @for ($i=22 ; $i<=30 ;$i++)
                    <li class="py-1">
                        <a href="{{ route('services.show',$services[$i]->slug) }}" class="footer-link hover:underline hover:underline-offset-1"> {{ $services[$i]->name }} </a>
                    </li>
                    @endfor
                    @endif
        </ul>
      </div>

      </div>
    </div>

    <div class="bg-primary-one ">
      <div class="container mx-auto flex flex-col lg:flex-row items-center space-y-4 md:space-y-0 justify-between py-4 md:px-20">
          <p class="mx-6 text-base text-center sm:mx-0 sm:text-left text-white">
            ©{{ now()->year }} All Rights Reserved. 4dollaressay.com
          </p>
          <a href="https://www.dmca.com/Protection/Status.aspx?ID=bfad670d-608f-4b5b-8574-0c1f15f94dcd&refurl=https://www.4dollaressay.com/services/">
          <img src="{{asset('imgs/dmca_protected_sml_120c.png')}}" class="h-7">
        </a>
        <div class="mx-4 sm:mx-0">
          <img src="{{asset('imgs/payment-methods.png')}}" class="h-6 ">
          </div>
      </div>
  </div>
  </footer>
  <div class="ht-ctc ht-ctc-chat ctc-analytics ctc_wp_desktop style-3_1 ht_ctc_animation no-animations" id="ht-ctc-chat" style="position: fixed; bottom: 15px; left: 15px; cursor: pointer; z-index: 99999999;">
    <div class="ht_ctc_style ht_ctc_chat_style">
        <style id="ht-ctc-s3">
            .ht-ctc:hover svg stop {
                stop-color: #25D366;
            }

            .ht-ctc:hover .ht_ctc_padding {
                background-color: #25D366 !important;
                box-shadow: 0px 0px 11px rgba(0, 0, 0, .5);
            }
        </style>
        <div title="WhatsApp us" style="display:flex;justify-content:center;align-items:center;">
            <a href="https://api.whatsapp.com/send/?phone=0012243385225"  target="_blank">
                <div class="ctc-analytics ht_ctc_padding" style="background-color: #25D366;padding: 6px;border-radius: 50%;box-shadow: 0px 0px 11px rgba(0,0,0,.5);">
                    <svg style="pointer-events:none; display:block; height:40px; width:40px;" width="40px" height="40px" viewBox="0 0 1219.547 1225.016">
                        <path fill="#E0E0E0" d="M1041.858 178.02C927.206 63.289 774.753.07 612.325 0 277.617 0 5.232 272.298 5.098 606.991c-.039 106.986 27.915 211.42 81.048 303.476L0 1225.016l321.898-84.406c88.689 48.368 188.547 73.855 290.166 73.896h.258.003c334.654 0 607.08-272.346 607.222-607.023.056-162.208-63.052-314.724-177.689-429.463zm-429.533 933.963h-.197c-90.578-.048-179.402-24.366-256.878-70.339l-18.438-10.93-191.021 50.083 51-186.176-12.013-19.087c-50.525-80.336-77.198-173.175-77.16-268.504.111-278.186 226.507-504.503 504.898-504.503 134.812.056 261.519 52.604 356.814 147.965 95.289 95.36 147.728 222.128 147.688 356.948-.118 278.195-226.522 504.543-504.693 504.543z">
                        </path>
                        <linearGradient id="htwaicona-chat" gradientUnits="userSpaceOnUse" x1="609.77" y1="1190.114" x2="609.77" y2="21.084">
                            <stop id="s3_1_offset_1" offset="0" stop-color="#25D366"></stop>
                            <stop id="s3_1_offset_2" offset="1" stop-color="#25D366"></stop>
                        </linearGradient>
                        <path fill="url(#htwaicona-chat)" d="M27.875 1190.114l82.211-300.18c-50.719-87.852-77.391-187.523-77.359-289.602.133-319.398 260.078-579.25 579.469-579.25 155.016.07 300.508 60.398 409.898 169.891 109.414 109.492 169.633 255.031 169.57 409.812-.133 319.406-260.094 579.281-579.445 579.281-.023 0 .016 0 0 0h-.258c-96.977-.031-192.266-24.375-276.898-70.5l-307.188 80.548z">
                        </path>
                        <image overflow="visible" opacity=".08" width="682" height="639" transform="translate(270.984 291.372)"></image>
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M462.273 349.294c-11.234-24.977-23.062-25.477-33.75-25.914-8.742-.375-18.75-.352-28.742-.352-10 0-26.25 3.758-39.992 18.766-13.75 15.008-52.5 51.289-52.5 125.078 0 73.797 53.75 145.102 61.242 155.117 7.5 10 103.758 166.266 256.203 226.383 126.695 49.961 152.477 40.023 179.977 37.523s88.734-36.273 101.234-71.297c12.5-35.016 12.5-65.031 8.75-71.305-3.75-6.25-13.75-10-28.75-17.5s-88.734-43.789-102.484-48.789-23.75-7.5-33.75 7.516c-10 15-38.727 48.773-47.477 58.773-8.75 10.023-17.5 11.273-32.5 3.773-15-7.523-63.305-23.344-120.609-74.438-44.586-39.75-74.688-88.844-83.438-103.859-8.75-15-.938-23.125 6.586-30.602 6.734-6.719 15-17.508 22.5-26.266 7.484-8.758 9.984-15.008 14.984-25.008 5-10.016 2.5-18.773-1.25-26.273s-32.898-81.67-46.234-111.326z">
                        </path>
                        <path fill="#FFF" d="M1036.898 176.091C923.562 62.677 772.859.185 612.297.114 281.43.114 12.172 269.286 12.039 600.137 12 705.896 39.633 809.13 92.156 900.13L7 1211.067l318.203-83.438c87.672 47.812 186.383 73.008 286.836 73.047h.255.003c330.812 0 600.109-269.219 600.25-600.055.055-160.343-62.328-311.108-175.649-424.53zm-424.601 923.242h-.195c-89.539-.047-177.344-24.086-253.93-69.531l-18.227-10.805-188.828 49.508 50.414-184.039-11.875-18.867c-49.945-79.414-76.312-171.188-76.273-265.422.109-274.992 223.906-498.711 499.102-498.711 133.266.055 258.516 52 352.719 146.266 94.195 94.266 146.031 219.578 145.992 352.852-.118 274.999-223.923 498.749-498.899 498.749z">
                        </path>
                    </svg>
                </div>
            </a>
        </div>
    </div>
</div>
