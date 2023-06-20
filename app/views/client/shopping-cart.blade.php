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
                Shopping Cart
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Breadcrumbs Section End -->

    <!-- ====== Shopping Cart Section Start -->
    <section class="wf vh wh">
      <div class="a da">
        <h2
          class="la zi bj gj yl an tp"
        >
          My Shopping cart
        </h2>

        <div class="ea sb he">
          <div class="oc vg zn/12">
            <div class="oa re">
              <div
                class="me ff nf ii hm"
              >
                <div
                  class="lb qa cc oc vd cm"
                >
                  <img
                    src="src/assets/ecom-images/shopping-carts/shopping-cart-04/image-01.jpg"
                    alt="product"
                    class="wb oc mg ng"
                  />
                </div>
                <div class="sb oc ge me">
                  <div class="xa oc me dl">
                    <div class="ta xa">
                      <h3>
                        <a
                          href="product-details.html"
                          class="qb wi bj gj ik am"
                        >
                          Trendy Skirt Set for Women
                        </a>
                      </h3>
                      <p class="ui dj hj">
                        Color: Blue
                      </p>
                      <p class="ui dj hj">
                        Size: S
                      </p>
                      <p class="ui dj mj">
                        In Stock
                      </p>
                    </div>
                    <div class="ta xa">
                      <p
                        class="sa ui dj gj"
                      >
                        Each
                      </p>
                      <p class="vi bj gj">
                        $39.50
                      </p>
                    </div>
                    <div class="ta">
                      <label
                        for=""
                        class="sa qb ui dj gj"
                      >
                        Quantity
                      </label>
                      <div class="e aa rb">
                        <select
                          class="e aa oc fe af of eg ph yh mi xi bj hj _j ak lk pk qk rk"
                        >
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4</option>
                        </select>
                        <span
                          class="d l g/2 y mb ic ad ae/2 be jf kf qf"
                        >
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="sb je oe">
                    <button
                      class="af qf vg ph xi dj hj ak ck fk jk"
                    >
                      Edit
                    </button>
                    <button
                      class="af qf vg ph xi dj hj ak dk gk jk"
                    >
                      Remove
                    </button>
                  </div>
                </div>
              </div>

              <div class="me ii hm">
                <div
                  class="lb qa cc oc vd cm"
                >
                  <img
                    src="src/assets/ecom-images/shopping-carts/shopping-cart-04/image-02.jpg"
                    alt="product"
                    class="wb oc mg ng"
                  />
                </div>
                <div class="sb oc ge me">
                  <div class="xa oc me dl">
                    <div class="ta xa">
                      <h3>
                        <a
                          href="product-details.html"
                          class="qb wi bj gj ik am"
                        >
                          Trendy Men's Sneakers
                        </a>
                      </h3>
                      <p class="ui dj hj">
                        Color: white
                      </p>
                      <p class="ui dj hj">
                        Size: L
                      </p>
                      <p class="ui dj mj">
                        In Stock
                      </p>
                    </div>
                    <div class="ta xa">
                      <p
                        class="sa ui dj gj"
                      >
                        Each
                      </p>
                      <p class="vi bj gj">
                        $99.50
                      </p>
                    </div>
                    <div class="ta">
                      <label
                        for=""
                        class="sa qb ui dj gj"
                      >
                        Quantity
                      </label>
                      <div class="e aa rb">
                        <select
                          class="e aa oc fe af of eg ph yh mi xi bj hj _j ak lk pk qk rk"
                        >
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4</option>
                        </select>
                        <span
                          class="d l g/2 y mb ic ad ae/2 be jf kf qf"
                        >
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="sb je oe">
                    <button
                      class="af qf vg ph xi dj hj ak ck fk jk"
                    >
                      Edit
                    </button>
                    <button
                      class="af qf vg ph xi dj hj ak dk gk jk"
                    >
                      Remove
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="oc vg yn/12">
            <div class="2xl:ud-pl-8">
              <div>
                <h3 class="oa vi cj gj">
                  Apply Coupon to get discount!
                </h3>
                <form class="sb">
                  <input
                    type="email"
                    class="ya ra jc oc af of wf _g ui dj hj _j lk ok"
                    placeholder="Coupon code"
                  />
                  <button
                    class="ra jc yf yg ui dj jj ak hk"
                  >
                    Submit
                  </button>
                </form>
              </div>

              <div class="ja ff nf qh">
                <div class="ra sb je me">
                  <div class="rh">
                    <p class="ui bj gj">
                      Subtotal
                    </p>
                  </div>
                  <div class="rh">
                    <p class="ui bj gj">
                      $96.00
                    </p>
                  </div>
                </div>
                <div class="ra sb je me">
                  <div class="rh">
                    <p class="ui dj gj">
                      Shipping Cost (+)
                    </p>
                  </div>
                  <div class="rh">
                    <p class="ui bj gj">
                      $14.00
                    </p>
                  </div>
                </div>
                <div class="sb je me">
                  <div class="rh">
                    <p class="ui dj gj">
                      Discount (-)
                    </p>
                  </div>
                  <div class="rh">
                    <p class="ui bj gj">
                      $9.00
                    </p>
                  </div>
                </div>
              </div>
              <div
                class="ja sb je me _h ni"
              >
                <div class="rh">
                  <p class="ui dj gj">
                    Estimated Total
                  </p>
                </div>
                <div class="rh">
                  <p class="ui bj gj">
                    $110.00
                  </p>
                </div>
              </div>

              <div class="oa">
                <a
                  href="checkout.html"
                  class="sb oc je le yf gh ah si ui ej jj hk"
                >
                  Checkout
                </a>
              </div>
              <p
                class="si ui dj hj"
              >
                You're <span class="nj"> $10.05 </span> away from
                free shipping!
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Shopping Cart Section End -->

@endsection