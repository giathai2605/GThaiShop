@extends('client.layout.main')
@section('content')

    <!-- ====== Breadcrumbs Section Start -->
    <section class="ef nf">
      <div class="a da">
        <div class="oc">
          <div class="ug vg ul qm rm">
            <ul class="sb je le">
              <li class="sb je">
                <a
                  href="index.html"
                  class="sb je ui bj gj ik"
                >
                  <span class="uh">
                    <svg
                      width="15"
                      height="15"
                      viewBox="0 0 15 15"
                      class="kg"
                    >
                      <path
                        d="M13.3503 14.6503H10.2162C9.51976 14.6503 8.93937 14.0697 8.93937 13.3729V10.8182C8.93937 10.5627 8.73043 10.3537 8.47505 10.3537H6.54816C6.29279 10.3537 6.08385 10.5627 6.08385 10.8182V13.3497C6.08385 14.0464 5.50346 14.627 4.80699 14.627H1.62646C0.929989 14.627 0.349599 14.0464 0.349599 13.3497V5.24431C0.349599 4.89594 0.535324 4.5708 0.837127 4.385L6.96604 0.506501C7.29106 0.297479 7.73216 0.297479 8.05717 0.506501L14.1861 4.385C14.4879 4.5708 14.6504 4.89594 14.6504 5.24431V13.3265C14.6504 14.0697 14.07 14.6503 13.3503 14.6503ZM6.52495 9.54086H8.45184C9.14831 9.54086 9.7287 10.1215 9.7287 10.8182V13.3497C9.7287 13.6052 9.93764 13.8142 10.193 13.8142H13.3503C13.6057 13.8142 13.8146 13.6052 13.8146 13.3497V5.26754C13.8146 5.19786 13.7682 5.12819 13.7218 5.08174L7.61608 1.20324C7.54643 1.15679 7.45357 1.15679 7.40714 1.20324L1.27822 5.08174C1.20858 5.12819 1.18536 5.19786 1.18536 5.26754V13.3729C1.18536 13.6284 1.3943 13.8374 1.64967 13.8374H4.80699C5.06236 13.8374 5.2713 13.6284 5.2713 13.3729V10.8182C5.24809 10.1215 5.82848 9.54086 6.52495 9.54086Z"
                      />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M7.51145 1.55106L13.465 5.33294V13.3497C13.465 13.412 13.4126 13.4644 13.3503 13.4644H10.193C10.1307 13.4644 10.0783 13.412 10.0783 13.3497V10.8182C10.0783 9.92832 9.34138 9.19112 8.45184 9.19112H6.52495C5.63986 9.19112 4.89529 9.92522 4.9217 10.8237V13.3729C4.9217 13.4352 4.86929 13.4877 4.80699 13.4877H1.64967C1.58738 13.4877 1.53496 13.4352 1.53496 13.3729V5.33311L7.51145 1.55106ZM1.27822 5.08174L7.40714 1.20324C7.45357 1.15679 7.54643 1.15679 7.61608 1.20324L13.7218 5.08174C13.7682 5.12819 13.8146 5.19786 13.8146 5.26754V13.3497C13.8146 13.6052 13.6057 13.8142 13.3503 13.8142H10.193C9.93764 13.8142 9.7287 13.6052 9.7287 13.3497V10.8182C9.7287 10.1215 9.14831 9.54086 8.45184 9.54086H6.52495C5.82848 9.54086 5.24809 10.1215 5.2713 10.8182V13.3729C5.2713 13.6284 5.06236 13.8374 4.80699 13.8374H1.64967C1.3943 13.8374 1.18536 13.6284 1.18536 13.3729V5.26754C1.18536 5.19786 1.20858 5.12819 1.27822 5.08174ZM13.3503 15H10.2162C9.32668 15 8.58977 14.2628 8.58977 13.3729V10.8182C8.58977 10.7559 8.53735 10.7035 8.47505 10.7035H6.54816C6.48587 10.7035 6.43345 10.7559 6.43345 10.8182V13.3497C6.43345 14.2396 5.69654 14.9768 4.80699 14.9768H1.62646C0.736911 14.9768 0 14.2396 0 13.3497V5.24431C0 4.77131 0.251303 4.33591 0.651944 4.08836L6.77814 0.211575C7.21781 -0.0705255 7.80541 -0.0705251 8.24508 0.211576C8.24546 0.211821 8.24584 0.212066 8.24622 0.212311L14.3713 4.08838C14.7853 4.34424 15 4.78759 15 5.24431V13.3265C15 14.2587 14.2671 15 13.3503 15ZM14.1861 4.385L8.05717 0.506501C7.73216 0.297479 7.29106 0.297479 6.96604 0.506501L0.837127 4.385C0.535324 4.5708 0.349599 4.89594 0.349599 5.24431V13.3497C0.349599 14.0464 0.929989 14.627 1.62646 14.627H4.80699C5.50346 14.627 6.08385 14.0464 6.08385 13.3497V10.8182C6.08385 10.5627 6.29279 10.3537 6.54816 10.3537H8.47505C8.73043 10.3537 8.93937 10.5627 8.93937 10.8182V13.3729C8.93937 14.0697 9.51976 14.6503 10.2162 14.6503H13.3503C14.07 14.6503 14.6504 14.0697 14.6504 13.3265V5.24431C14.6504 4.89594 14.4879 4.5708 14.1861 4.385Z"
                      />
                    </svg>
                  </span>
                  Home
                </a>
                <span class="wg hj">
                  <svg
                    width="7"
                    height="12"
                    viewBox="0 0 7 12"
                    class="kg"
                  >
                    <path
                      d="M0.879233 11.4351C0.808625 11.4351 0.720364 11.3998 0.667408 11.3469C0.543844 11.2233 0.543844 11.0291 0.649756 10.9056L5.09807 6.17483C5.18633 6.08657 5.18633 5.92771 5.09807 5.82179L0.649756 1.09105C0.526192 0.967487 0.543844 0.773315 0.667408 0.649751C0.790972 0.526187 0.985145 0.543839 1.10871 0.667403L5.55702 5.39815C5.85711 5.73353 5.85711 6.26309 5.55702 6.58083L1.10871 11.3292C1.0381 11.3998 0.967493 11.4351 0.879233 11.4351Z"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M0.229332 10.5281L4.48868 5.99831L0.24288 1.48294C-0.133119 1.09849 -0.0312785 0.549591 0.267983 0.25033C0.652758 -0.134445 1.2069 -0.0332381 1.50812 0.267982L1.52041 0.280272L5.9781 5.02138C6.46442 5.56491 6.47872 6.42661 5.96853 6.96778V6.96778L1.50834 11.7289C1.36051 11.8767 1.15353 12 0.879227 12C0.660517 12 0.428074 11.9064 0.267983 11.7463C-0.0719543 11.4064 -0.0699959 10.8773 0.220873 10.538L0.229332 10.5281ZM5.55702 6.58083C5.85711 6.26309 5.85711 5.73353 5.55702 5.39815L1.10871 0.667403C0.985145 0.543839 0.790972 0.526187 0.667408 0.649751C0.543844 0.773315 0.526192 0.967487 0.649756 1.09105L5.09807 5.82179C5.18633 5.92771 5.18633 6.08657 5.09807 6.17483L0.649756 10.9056C0.543844 11.0291 0.543844 11.2233 0.667408 11.3469C0.720364 11.3998 0.808625 11.4351 0.879233 11.4351C0.967493 11.4351 1.0381 11.3998 1.10871 11.3292L5.55702 6.58083Z"
                    />
                  </svg>
                </span>
              </li>

              <li class="ui bj ij">
                Wishlist
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Breadcrumbs Section End -->

    <!-- ====== Wishlist Section Start -->
    <section class="wf wh vh">
      <div class="a da">
        <div class="ea sb">
          <div class="oc vg">
            <div
              class="da cb wd si"
            >
              <h2
                class="xa _i bj gj _l"
              >
                Your Favorite Items
              </h2>
              <p
                class="ui dj hj ym"
              >
                There are 03 products in this list
              </p>
            </div>
          </div>
        </div>

        <div class="oc">
          <div class="od te">
            <table class="oc _d">
              <thead>
                <tr class="hf vf ri">
                  <th
                    class="gd ug vg ui dj lj kq"
                  >
                    Product Name
                  </th>
                  <th
                    class="hd ug vg ui dj lj"
                  >
                    Unit Price
                  </th>
                  <th
                    class="id ug vg ui dj lj"
                  >
                    Stock Status
                  </th>
                  <th
                    class="jd ug vg ui dj lj"
                  >
                    Action
                  </th>
                  <th
                    class="id ug vg ui dj lj lq"
                  ></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="hf vf tg kq">
                    <div class="sb je">
                      <img
                        src="src/assets/ecom-images/wishlists/wishlist-02/image-01.png"
                        alt="image"
                        class="ta vb cd ye"
                      />
                      <div>
                        <h5 class="wi dj lj">
                          <a
                            href="product-details.html"
                            class="ik"
                          >
                            Stylish table lamp
                          </a>
                        </h5>
                      </div>
                    </div>
                  </td>
                  <td class="hf vf tg">
                    <p
                      class="sb je wi dj hj"
                    >
                      <span class="ob qj">$259</span>
                      $155
                    </p>
                  </td>
                  <td class="hf vf tg">
                    <p class="wi dj hj">
                      In Stock
                    </p>
                  </td>
                  <td class="hf vf tg">
                    <button
                      class="rb ye yf ph _g xi dj jj hk"
                    >
                      Add to Cart
                    </button>
                  </td>
                  <td
                    class="hf vf tg si lq"
                  >
                    <button class="hj kk">
                      <svg
                        width="16"
                        height="20"
                        viewBox="0 0 16 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M13.8438 2.6875H10.8125V1.5625C10.8125 0.90625 10.2812 0.375 9.625 0.375H6.375C5.71875 0.40625 5.1875 0.90625 5.1875 1.5625V2.6875H2.15625C1.5 2.6875 0.96875 3.21875 0.96875 3.875V6.15625C0.96875 6.46875 1.21875 6.71875 1.53125 6.71875H2V17.3125C2 18.5938 3.0625 19.6563 4.34375 19.6563H11.6875C12.9688 19.6563 14.0312 18.5938 14.0312 17.3125V6.65625H14.5C14.8125 6.65625 15.0625 6.40625 15.0625 6.09375V3.8125C15 3.1875 14.5 2.6875 13.8438 2.6875ZM6.28125 1.5625C6.28125 1.53125 6.3125 1.46875 6.375 1.46875H9.625C9.65625 1.46875 9.71875 1.5 9.71875 1.5625V2.6875H6.28125V1.5625ZM2.09375 3.84375C2.09375 3.8125 2.125 3.75 2.1875 3.75H5.78125H10.2812H13.875C13.9062 3.75 13.9688 3.78125 13.9688 3.84375V5.5625H2.09375V3.84375ZM12.9062 17.2813C12.9062 17.9688 12.3438 18.5313 11.6562 18.5313H4.34375C3.65625 18.5313 3.09375 17.9688 3.09375 17.2813V6.65625H12.9375V17.2813H12.9062Z"
                          fill="currentColor"
                        />
                        <path
                          d="M8 15.0938C8.3125 15.0938 8.5625 14.8438 8.5625 14.5313V10.4375C8.5625 10.125 8.3125 9.875 8 9.875C7.6875 9.875 7.4375 10.125 7.4375 10.4375V14.5625C7.46875 14.875 7.6875 15.0938 8 15.0938Z"
                          fill="currentColor"
                        />
                        <path
                          d="M10.625 15.0938C10.9375 15.0938 11.1875 14.8438 11.1875 14.5313V10.4375C11.1875 10.125 10.9375 9.875 10.625 9.875C10.3125 9.875 10.0625 10.125 10.0625 10.4375V14.5625C10.0938 14.875 10.3438 15.0938 10.625 15.0938Z"
                          fill="currentColor"
                        />
                        <path
                          d="M5.375 15.0938C5.6875 15.0938 5.9375 14.8438 5.9375 14.5313V10.4375C5.9375 10.125 5.6875 9.875 5.375 9.875C5.0625 9.875 4.8125 10.125 4.8125 10.4375V14.5625C4.8125 14.875 5.0625 15.0938 5.375 15.0938Z"
                          fill="currentColor"
                        />
                      </svg>
                    </button>
                  </td>
                </tr>

                <tr>
                  <td class="hf vf tg kq">
                    <div class="sb je">
                      <img
                        src="src/assets/ecom-images/wishlists/wishlist-02/image-02.png"
                        alt="image"
                        class="ta vb cd ye"
                      />
                      <div>
                        <h5 class="wi dj lj">
                          <a
                            href="product-details.html"
                            class="ik"
                          >
                            White energy bulb
                          </a>
                        </h5>
                      </div>
                    </div>
                  </td>
                  <td class="hf vf tg">
                    <p
                      class="sb je wi dj hj"
                    >
                      <span class="ob qj">$85</span>
                      $59
                    </p>
                  </td>
                  <td class="hf vf tg">
                    <p class="wi dj hj">
                      Stock Out
                    </p>
                  </td>
                  <td class="hf vf tg">
                    <button
                      class="rb ye yf ph _g xi dj jj hk"
                    >
                      Add to Cart
                    </button>
                  </td>
                  <td
                    class="hf vf tg si lq"
                  >
                    <button class="hj kk">
                      <svg
                        width="16"
                        height="20"
                        viewBox="0 0 16 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M13.8438 2.6875H10.8125V1.5625C10.8125 0.90625 10.2812 0.375 9.625 0.375H6.375C5.71875 0.40625 5.1875 0.90625 5.1875 1.5625V2.6875H2.15625C1.5 2.6875 0.96875 3.21875 0.96875 3.875V6.15625C0.96875 6.46875 1.21875 6.71875 1.53125 6.71875H2V17.3125C2 18.5938 3.0625 19.6563 4.34375 19.6563H11.6875C12.9688 19.6563 14.0312 18.5938 14.0312 17.3125V6.65625H14.5C14.8125 6.65625 15.0625 6.40625 15.0625 6.09375V3.8125C15 3.1875 14.5 2.6875 13.8438 2.6875ZM6.28125 1.5625C6.28125 1.53125 6.3125 1.46875 6.375 1.46875H9.625C9.65625 1.46875 9.71875 1.5 9.71875 1.5625V2.6875H6.28125V1.5625ZM2.09375 3.84375C2.09375 3.8125 2.125 3.75 2.1875 3.75H5.78125H10.2812H13.875C13.9062 3.75 13.9688 3.78125 13.9688 3.84375V5.5625H2.09375V3.84375ZM12.9062 17.2813C12.9062 17.9688 12.3438 18.5313 11.6562 18.5313H4.34375C3.65625 18.5313 3.09375 17.9688 3.09375 17.2813V6.65625H12.9375V17.2813H12.9062Z"
                          fill="currentColor"
                        />
                        <path
                          d="M8 15.0938C8.3125 15.0938 8.5625 14.8438 8.5625 14.5313V10.4375C8.5625 10.125 8.3125 9.875 8 9.875C7.6875 9.875 7.4375 10.125 7.4375 10.4375V14.5625C7.46875 14.875 7.6875 15.0938 8 15.0938Z"
                          fill="currentColor"
                        />
                        <path
                          d="M10.625 15.0938C10.9375 15.0938 11.1875 14.8438 11.1875 14.5313V10.4375C11.1875 10.125 10.9375 9.875 10.625 9.875C10.3125 9.875 10.0625 10.125 10.0625 10.4375V14.5625C10.0938 14.875 10.3438 15.0938 10.625 15.0938Z"
                          fill="currentColor"
                        />
                        <path
                          d="M5.375 15.0938C5.6875 15.0938 5.9375 14.8438 5.9375 14.5313V10.4375C5.9375 10.125 5.6875 9.875 5.375 9.875C5.0625 9.875 4.8125 10.125 4.8125 10.4375V14.5625C4.8125 14.875 5.0625 15.0938 5.375 15.0938Z"
                          fill="currentColor"
                        />
                      </svg>
                    </button>
                  </td>
                </tr>

                <tr>
                  <td class="hf vf tg kq">
                    <div class="sb je">
                      <img
                        src="src/assets/ecom-images/wishlists/wishlist-02/image-03.png"
                        alt="image"
                        class="ta vb cd ye"
                      />
                      <div>
                        <h5 class="wi dj lj">
                          <a
                            href="product-details.html"
                            class="ik"
                          >
                            Stylish LED bulb
                          </a>
                        </h5>
                      </div>
                    </div>
                  </td>
                  <td class="hf vf tg">
                    <p
                      class="sb je wi dj hj"
                    >
                      $99
                    </p>
                  </td>
                  <td class="hf vf tg">
                    <p class="wi dj hj">
                      In Stock
                    </p>
                  </td>
                  <td class="hf vf tg">
                    <button
                      class="rb ye yf ph _g xi dj jj hk"
                    >
                      Add to Cart
                    </button>
                  </td>
                  <td
                    class="hf vf tg si lq"
                  >
                    <button class="hj kk">
                      <svg
                        width="16"
                        height="20"
                        viewBox="0 0 16 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M13.8438 2.6875H10.8125V1.5625C10.8125 0.90625 10.2812 0.375 9.625 0.375H6.375C5.71875 0.40625 5.1875 0.90625 5.1875 1.5625V2.6875H2.15625C1.5 2.6875 0.96875 3.21875 0.96875 3.875V6.15625C0.96875 6.46875 1.21875 6.71875 1.53125 6.71875H2V17.3125C2 18.5938 3.0625 19.6563 4.34375 19.6563H11.6875C12.9688 19.6563 14.0312 18.5938 14.0312 17.3125V6.65625H14.5C14.8125 6.65625 15.0625 6.40625 15.0625 6.09375V3.8125C15 3.1875 14.5 2.6875 13.8438 2.6875ZM6.28125 1.5625C6.28125 1.53125 6.3125 1.46875 6.375 1.46875H9.625C9.65625 1.46875 9.71875 1.5 9.71875 1.5625V2.6875H6.28125V1.5625ZM2.09375 3.84375C2.09375 3.8125 2.125 3.75 2.1875 3.75H5.78125H10.2812H13.875C13.9062 3.75 13.9688 3.78125 13.9688 3.84375V5.5625H2.09375V3.84375ZM12.9062 17.2813C12.9062 17.9688 12.3438 18.5313 11.6562 18.5313H4.34375C3.65625 18.5313 3.09375 17.9688 3.09375 17.2813V6.65625H12.9375V17.2813H12.9062Z"
                          fill="currentColor"
                        />
                        <path
                          d="M8 15.0938C8.3125 15.0938 8.5625 14.8438 8.5625 14.5313V10.4375C8.5625 10.125 8.3125 9.875 8 9.875C7.6875 9.875 7.4375 10.125 7.4375 10.4375V14.5625C7.46875 14.875 7.6875 15.0938 8 15.0938Z"
                          fill="currentColor"
                        />
                        <path
                          d="M10.625 15.0938C10.9375 15.0938 11.1875 14.8438 11.1875 14.5313V10.4375C11.1875 10.125 10.9375 9.875 10.625 9.875C10.3125 9.875 10.0625 10.125 10.0625 10.4375V14.5625C10.0938 14.875 10.3438 15.0938 10.625 15.0938Z"
                          fill="currentColor"
                        />
                        <path
                          d="M5.375 15.0938C5.6875 15.0938 5.9375 14.8438 5.9375 14.5313V10.4375C5.9375 10.125 5.6875 9.875 5.375 9.875C5.0625 9.875 4.8125 10.125 4.8125 10.4375V14.5625C4.8125 14.875 5.0625 15.0938 5.375 15.0938Z"
                          fill="currentColor"
                        />
                      </svg>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Wishlist Section End -->

   @endsection