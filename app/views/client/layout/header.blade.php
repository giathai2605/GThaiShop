
    <!-- ====== Navbar Section Start -->
    <header
  x-data="
        {
          navbarOpen: false,
          searchForm: false,
          wishlistOpen: false,
          cartOpen: false,
          submenuOpen: false,
          categories: false,
          categoryOne: true,
        }
      "
  class="e ba sb oc je wf"
>
  <div class="a da">
    <div
      class="e ea sb je me"
    >
      <div class="dd od vg co">
        <a href="index.html" class="qb oc th wo">
          <img
            src="src/assets/images/logo/logo.svg"
            alt="logo"
            class="oc"
          />
        </a>
      </div>
      <div class="sb oc je me vg">
        <div class="oc">
          <button
            @click="navbarOpen = !navbarOpen"
            :class="navbarOpen && 'navbarTogglerActive' "
            id="navbarToggler"
            class="ring-primary focus:ring-2 d l g/2 qb ae/2 ve wg eh rn"
          >
            <span
              class="e ka qb mc vc cg"
            ></span>
            <span
              class="e ka qb mc vc cg"
            ></span>
            <span
              class="e ka qb mc vc cg"
            ></span>
          </button>
          <nav
            :class="!navbarOpen && 'ub' "
            id="navbarCollapse"
            class="d l t oc yd le ve wf th yg zj cn pn wn io po xo op"
          >
            <ul class="qq je pn">
              <li
                class="e yo"
                @click.outside="categories = false "
              >
                <a
                  href="javascript:void(0)"
                  @click="categories = !categories "
                  class="sb je me xe xf mh vg ui dj lj ik qn zo _o"
                >
                  All categories

                  <span class="di">
                    <svg
                      width="11"
                      height="6"
                      viewBox="0 0 11 6"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M5.39683 5.40046C5.20176 5.40046 5.00669 5.33284 4.84413 5.1807L0.487528 0.920728C0.373737 0.802396 0.373737 0.616445 0.471272 0.498112C0.585064 0.37978 0.76388 0.37978 0.877671 0.481208L5.23427 4.74118C5.31555 4.8257 5.46185 4.8257 5.55939 4.74118L9.91599 0.481208C10.0298 0.362875 10.2086 0.37978 10.3224 0.498112C10.4362 0.616445 10.4199 0.802396 10.3061 0.920728L5.94953 5.16379C5.78697 5.31594 5.5919 5.40046 5.39683 5.40046Z"
                        fill="currentColor"
                      />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M4.56447 5.4667L0.199071 1.19812C-0.0611467 0.927515 -0.0588086 0.512326 0.16261 0.243696L0.172344 0.231887L0.182952 0.220855C0.450688 -0.0575644 0.874846 -0.0571462 1.14383 0.182609L1.15072 0.188754L5.39683 4.34069L9.63276 0.198704C9.93371 -0.108224 10.3725 -0.0268578 10.6107 0.220855C10.9 0.521698 10.829 0.954046 10.5944 1.19798L10.5854 1.20743L6.22292 5.4559C5.99907 5.66539 5.70971 5.80046 5.39683 5.80046C5.10561 5.80046 4.81129 5.69783 4.5708 5.47274L4.56447 5.4667ZM9.91599 0.481208L5.55939 4.74118C5.46185 4.8257 5.31555 4.8257 5.23427 4.74118L0.877671 0.481208C0.76388 0.37978 0.585064 0.37978 0.471272 0.498112C0.373737 0.616445 0.373737 0.802396 0.487528 0.920728L4.84413 5.1807C5.00669 5.33284 5.20176 5.40046 5.39683 5.40046C5.5919 5.40046 5.78697 5.31594 5.94953 5.16379L10.3061 0.920728C10.4199 0.802396 10.4362 0.616445 10.3224 0.498112C10.2086 0.37978 10.0298 0.362875 9.91599 0.481208Z"
                        fill="currentColor"
                      />
                    </svg>
                  </span>
                </a>

                <div
                  :class="categories ? 'qb' : 'ub' "
                  class="e t m y ve wf bk dn en do ko oo yo"
                >
                  <span
                    class="d u v z ub zb rc be _e cf lf mf nf wf on"
                  ></span>
                  <div class="lh so">
                    <a
                      href="filters.html"
                      class="qb xe mh xi dj hj ik"
                    >
                      Arts & Crafts
                    </a>
                  </div>
                  <div class="sk e lh so">
                    <a
                      href="javascript:void(0)"
                      @click="categoryOne = !categoryOne "
                      class="sb je me xe mh xi dj hj ik uk"
                    >
                      Fashion

                      <span>
                        <svg
                          width="5"
                          height="10"
                          viewBox="0 0 5 10"
                          class="kg"
                        >
                          <path
                            d="M4.6552 5.34793C4.6552 5.51608 4.59691 5.68423 4.46577 5.82436L0.793668 9.57975C0.691666 9.67784 0.531376 9.67784 0.429373 9.59376C0.32737 9.49567 0.32737 9.34154 0.414801 9.24345L4.0869 5.48806C4.15976 5.41799 4.15976 5.29188 4.0869 5.2078L0.414801 1.45241C0.312798 1.35433 0.32737 1.20019 0.429373 1.1021C0.531375 1.00401 0.691665 1.01802 0.793668 1.11611L4.45119 4.8715C4.58234 5.01163 4.6552 5.17978 4.6552 5.34793Z"
                          />
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M4.71229 6.06542L1.03278 9.8284C0.799518 10.0527 0.441625 10.0507 0.210066 9.85983L0.199887 9.85144L0.190377 9.8423C-0.0496206 9.61151 -0.0492601 9.24588 0.157409 9.01402L0.162706 9.00808L3.74167 5.34793L0.171283 1.69656C-0.0932893 1.43713 -0.0231519 1.0589 0.190377 0.853566C0.449703 0.604191 0.822388 0.665372 1.03266 0.867578L1.04081 0.875411L4.70299 4.63584C4.88357 4.82879 5 5.07822 5 5.34793C5 5.59896 4.91153 5.85266 4.71751 6.05997L4.71229 6.06542ZM0.414801 1.45241L4.0869 5.2078C4.15976 5.29188 4.15976 5.41799 4.0869 5.48806L0.414801 9.24345C0.32737 9.34154 0.32737 9.49567 0.429373 9.59376C0.531376 9.67784 0.691666 9.67784 0.793668 9.57975L4.46577 5.82436C4.59691 5.68423 4.6552 5.51608 4.6552 5.34793C4.6552 5.17978 4.58234 5.01163 4.45119 4.8715L0.793668 1.11611C0.691665 1.01802 0.531375 1.00401 0.429373 1.1021C0.32737 1.20019 0.312798 1.35433 0.414801 1.45241Z"
                          />
                        </svg>
                      </span>
                    </a>

                    <div
                      :class="!categoryOne ? 'ub on' : 'qb' "
                      class="w h nf wf mh tk vk bn dn eo jo ko vo ro np dq"
                    >
                      <div class="ia sb he">
                        <div class="oc lh ao/3">
                          <div>
                            <h3
                              class="ra ui bj gj"
                            >
                              New Arrivals
                            </h3>
                            <a
                              href="filters.html"
                              class="qb xe mh xi dj hj ik"
                            >
                              Dresses
                            </a>
                            <a
                              href="filters.html"
                              class="qb xe mh xi dj hj ik"
                            >
                              Jackets
                            </a>
                            <a
                              href="filters.html"
                              class="qb xe mh xi dj hj ik"
                            >
                              Sweatshirts
                            </a>
                            <a
                              href="filters.html"
                              class="qb xe mh xi dj hj ik"
                            >
                              Tops & Tees
                            </a>
                            <a
                              href="filters.html"
                              class="qb xe mh xi dj hj ik"
                            >
                              Party Dresses
                            </a>
                          </div>
                        </div>
                        <div class="oc lh ao/3">
                          <div>
                            <h3
                              class="ra ui bj gj"
                            >
                              New Arrivals
                            </h3>
                            <a
                              href="filters.html"
                              class="qb xe mh xi dj hj ik"
                            >
                              Dresses
                            </a>
                            <a
                              href="filters.html"
                              class="qb xe mh xi dj hj ik"
                            >
                              Jackets
                            </a>
                            <a
                              href="filters.html"
                              class="qb xe mh xi dj hj ik"
                            >
                              Sweatshirts
                            </a>
                            <a
                              href="filters.html"
                              class="qb xe mh xi dj hj ik"
                            >
                              Tops & Tees
                            </a>
                            <a
                              href="filters.html"
                              class="qb xe mh xi dj hj ik"
                            >
                              Party Dresses
                            </a>
                          </div>
                        </div>
                        <div class="oc lh ao/3">
                          <a href="javascript:void(0)" class="xe">
                            <img
                              src="src/assets/ecom-images/navbars/navbar-02/bannder.jpg"
                              alt="banner"
                              class="oc xe"
                            />
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="lh so">
                    <a
                      href="filters.html"
                      class="qb xe mh xi dj hj ik"
                    >
                      Bags & Shoes
                    </a>
                  </div>
                  <div class="lh so">
                    <a
                      href="filters.html"
                      class="qb xe mh xi dj hj ik"
                    >
                      Jewelry & Watch
                    </a>
                  </div>
                </div>
              </li>
              <li>
                <a
                  href="index.html"
                  class="sb me mh ui dj lj ik hn rn ap up"
                >
                  Home
                </a>
              </li>
              <li>
                <a
                  href="filters.html"
                  class="sb me mh ui dj lj ik hn qn ap"
                >
                  Shop
                </a>
              </li>
              <li>
                <a
                  href="filters.html"
                  class="sb me mh ui dj lj ik hn qn ap"
                >
                  Products
                </a>
              </li>
              <li class="sk e yo">
                <a
                  href="javascript:void(0)"
                  @click="submenuOpen = !submenuOpen "
                  class="sb je me mh ui dj lj ik hn qn _o"
                >
                  Pages
                  <span class="di">
                    <svg
                      width="11"
                      height="6"
                      viewBox="0 0 11 6"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M5.39683 5.40046C5.20176 5.40046 5.00669 5.33284 4.84413 5.1807L0.487528 0.920728C0.373737 0.802396 0.373737 0.616445 0.471272 0.498112C0.585064 0.37978 0.76388 0.37978 0.877671 0.481208L5.23427 4.74118C5.31555 4.8257 5.46185 4.8257 5.55939 4.74118L9.91599 0.481208C10.0298 0.362875 10.2086 0.37978 10.3224 0.498112C10.4362 0.616445 10.4199 0.802396 10.3061 0.920728L5.94953 5.16379C5.78697 5.31594 5.5919 5.40046 5.39683 5.40046Z"
                        fill="currentColor"
                      />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M4.56447 5.4667L0.199071 1.19812C-0.0611467 0.927515 -0.0588086 0.512326 0.16261 0.243696L0.172344 0.231887L0.182952 0.220855C0.450688 -0.0575644 0.874846 -0.0571462 1.14383 0.182609L1.15072 0.188754L5.39683 4.34069L9.63276 0.198704C9.93371 -0.108224 10.3725 -0.0268578 10.6107 0.220855C10.9 0.521698 10.829 0.954046 10.5944 1.19798L10.5854 1.20743L6.22292 5.4559C5.99907 5.66539 5.70971 5.80046 5.39683 5.80046C5.10561 5.80046 4.81129 5.69783 4.5708 5.47274L4.56447 5.4667ZM9.91599 0.481208L5.55939 4.74118C5.46185 4.8257 5.31555 4.8257 5.23427 4.74118L0.877671 0.481208C0.76388 0.37978 0.585064 0.37978 0.471272 0.498112C0.373737 0.616445 0.373737 0.802396 0.487528 0.920728L4.84413 5.1807C5.00669 5.33284 5.20176 5.40046 5.39683 5.40046C5.5919 5.40046 5.78697 5.31594 5.94953 5.16379L10.3061 0.920728C10.4199 0.802396 10.4362 0.616445 10.3224 0.498112C10.2086 0.37978 10.0298 0.362875 9.91599 0.481208Z"
                        fill="currentColor"
                      />
                    </svg>
                  </span>
                </a>

                <div
                  :class="!submenuOpen ? 'ub on' : 'qb' "
                  class="e t m ve wf lh bk vk bn dn en do ko oo yo so np pp qp"
                >
                  <a
                    href="index.html"
                    class="qb xe mh xi dj hj ik"
                  >
                    Home
                  </a>
                  <a
                    href="checkout.html"
                    class="qb xe mh xi dj hj ik"
                  >
                    Checkout
                  </a>
                  <a
                    href="filters.html"
                    class="qb xe mh xi dj hj ik"
                  >
                    Filters
                  </a>
                  <a
                    href="order-summary.html"
                    class="qb xe mh xi dj hj ik"
                  >
                    Order Summary
                  </a>
                  <a
                    href="product-details.html"
                    class="qb xe mh xi dj hj ik"
                  >
                    Product details
                  </a>
                  <a
                    href="shopping-cart.html"
                    class="qb xe mh xi dj hj ik"
                  >
                    Shopping Cart
                  </a>
                  <a
                    href="wishlist.html"
                    class="qb xe mh xi dj hj ik"
                  >
                    Wishlist
                  </a>
                  <a
                    href="support.html"
                    class="qb xe mh xi dj hj ik"
                  >
                    Support
                  </a>
                </div>
              </li>
              <li>
                <a
                  href="support.html"
                  class="sb me mh ui dj lj ik hn rn ap up"
                >
                  Contact
                </a>
              </li>
            </ul>
          </nav>
        </div>
        <div
          class="e x ub je ke dl fn"
        >
          <div class="e">
            <div class="sb zd ke">
              <button
                @click="searchForm = !searchForm"
                class="sb hc tc je le lj"
              >
                <svg
                  width="26"
                  height="26"
                  viewBox="0 0 26 26"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M4 10.9229C4 6.54719 7.54719 3 11.9229 3C16.2985 3 19.8457 6.54719 19.8457 10.9229C19.8457 15.2985 16.2985 18.8457 11.9229 18.8457C7.54719 18.8457 4 15.2985 4 10.9229ZM11.9229 4.77157C8.5256 4.77157 5.77157 7.5256 5.77157 10.9229C5.77157 14.3201 8.5256 17.0742 11.9229 17.0742C15.3201 17.0742 18.0742 14.3201 18.0742 10.9229C18.0742 7.5256 15.3201 4.77157 11.9229 4.77157Z"
                    fill="#212B36"
                  />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M16.3733 16.511C16.7613 16.213 17.3173 16.286 17.6153 16.674L21.7096 22.0051C22.0076 22.3931 21.9346 22.9492 21.5466 23.2471C21.1586 23.5451 20.6026 23.4721 20.3046 23.0841L16.2103 17.753C15.9123 17.365 15.9853 16.809 16.3733 16.511Z"
                    fill="#212B36"
                  />
                </svg>
              </button>
            </div>
            <div
              x-show="searchForm"
              @click.outside="searchForm = false"
              class="d t i jb ed"
            >
              <form class="sb je me">
                <input
                  type="text"
                  placeholder="Search Components or UI"
                  class="oc we af pf wf ug oi pi yj _j lk nk ok"
                />
                <button
                  class="d s g/2 ae/2 hj"
                >
                  <svg
                    width="20"
                    height="18"
                    viewBox="0 0 20 18"
                    class="kg"
                  >
                    <path
                      d="M19.4062 16.8125L13.9375 12.375C14.9375 11.0625 15.5 9.46875 15.5 7.78125C15.5 5.75 14.7187 3.875 13.2812 2.4375C10.3437 -0.5 5.5625 -0.5 2.59375 2.4375C1.1875 3.84375 0.40625 5.75 0.40625 7.75C0.40625 9.78125 1.1875 11.6562 2.625 13.0937C4.09375 14.5625 6.03125 15.3125 7.96875 15.3125C9.875 15.3125 11.75 14.5937 13.2187 13.1875L18.75 17.6562C18.8437 17.75 18.9687 17.7812 19.0937 17.7812C19.25 17.7812 19.4062 17.7187 19.5312 17.5937C19.6875 17.3437 19.6562 17 19.4062 16.8125ZM3.375 12.3437C2.15625 11.125 1.5 9.5 1.5 7.75C1.5 6 2.15625 4.40625 3.40625 3.1875C4.65625 1.9375 6.3125 1.3125 7.96875 1.3125C9.625 1.3125 11.2812 1.9375 12.5312 3.1875C13.75 4.40625 14.4375 6.03125 14.4375 7.75C14.4375 9.46875 13.7187 11.125 12.5 12.3437C10 14.8437 5.90625 14.8437 3.375 12.3437Z"
                    />
                  </svg>
                </button>
              </form>
            </div>
          </div>

          <div class="e">
            <div class="sb zd ke">
              <button
                @click="wishlistOpen = !wishlistOpen"
                class="e sb hc tc je le lj"
              >
                <svg
                  width="26"
                  height="26"
                  viewBox="0 0 26 26"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M13.0002 23.0002C12.5716 23.0002 12.1073 22.8539 11.7859 22.5249C10.9645 21.7936 10.1431 21.0989 9.42877 20.4773C7.32162 18.6492 5.5002 17.077 4.21448 15.5048C2.71448 13.6766 2.0002 11.9216 2.0002 9.98374C2.0002 8.08246 2.64305 6.32744 3.82162 5.04773C5.0002 3.73146 6.64305 3.0002 8.42877 3.0002C9.7502 3.0002 11.0002 3.43895 12.0716 4.2799C12.3931 4.53584 12.7145 4.82835 13.0002 5.15742C13.2859 4.82835 13.6073 4.53584 13.9288 4.2799C15.0002 3.43895 16.2145 3.0002 17.5716 3.0002C19.3573 3.0002 20.9645 3.73146 22.1788 5.04773C23.3573 6.32744 24.0002 8.08246 24.0002 9.98374C24.0002 11.9216 23.2859 13.6766 21.7859 15.5048C20.5002 17.077 18.6788 18.6492 16.5716 20.4773C15.8573 21.0989 15.0359 21.7936 14.2145 22.5249C13.8931 22.8174 13.4288 23.0002 13.0002 23.0002ZM8.42877 4.24334C7.0002 4.24334 5.67877 4.82835 4.7502 5.88868C3.78591 6.94901 3.28591 8.37497 3.28591 9.94718C3.28591 11.556 3.89305 13.055 5.17877 14.6638C6.39305 16.1629 8.17877 17.6985 10.2502 19.4901C10.9645 20.1117 11.7859 20.8064 12.6073 21.5742C12.8216 21.757 13.1788 21.757 13.3931 21.5742C14.2502 20.843 15.0359 20.1117 15.7502 19.4901C17.8216 17.6985 19.6073 16.1629 20.8216 14.6638C22.1073 13.055 22.7145 11.556 22.7145 9.94718C22.7145 8.37497 22.1788 6.94901 21.2502 5.88868C20.2859 4.82835 19.0002 4.24334 17.5716 4.24334C16.5002 4.24334 15.5359 4.57241 14.7145 5.26711C14.3573 5.52305 14.0716 5.85211 13.7502 6.21775C13.5716 6.43712 13.2859 6.58338 13.0002 6.58338C12.7145 6.58338 12.4288 6.43712 12.2502 6.21775C11.9645 5.85211 11.6431 5.52305 11.2859 5.26711C10.4645 4.60897 9.5002 4.24334 8.42877 4.24334Z"
                    fill="#212B36"
                  />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M12.2585 4.04521C12.5091 4.24477 12.7619 4.46758 13.0002 4.71385C13.2385 4.46758 13.4913 4.24477 13.7419 4.04521L13.7435 4.04391C14.8653 3.16342 16.1442 2.7002 17.5716 2.7002C19.4444 2.7002 21.1305 3.46895 22.3993 4.84431C23.6343 6.18534 24.3002 8.01564 24.3002 9.98374C24.3002 12.0065 23.5508 13.8266 22.0181 15.6947C20.7379 17.2602 18.9398 18.8201 16.8903 20.5981L16.7686 20.7037C16.5209 20.9192 16.2618 21.1423 15.995 21.372C15.4876 21.8088 14.9524 22.2696 14.4152 22.7479C14.04 23.0887 13.5048 23.3002 13.0002 23.3002C12.5141 23.3002 11.969 23.1365 11.579 22.7423C11.0438 22.266 10.5108 21.8071 10.0054 21.372C9.73865 21.1423 9.47956 20.9192 9.23189 20.7037C9.1912 20.6684 9.15061 20.6332 9.11012 20.5981C7.0607 18.8202 5.26261 17.2603 3.98239 15.6949C2.44959 13.8267 1.7002 12.0066 1.7002 9.98374C1.7002 8.01639 2.36539 6.18693 3.59952 4.84604C4.83546 3.46658 6.55928 2.7002 8.42877 2.7002C9.81948 2.7002 11.1343 3.16282 12.2568 4.04391L12.2585 4.04521ZM3.82162 5.04773C2.64305 6.32744 2.0002 8.08246 2.0002 9.98374C2.0002 11.9216 2.71448 13.6766 4.21448 15.5048C5.47824 17.0501 7.25956 18.5955 9.32105 20.3839L9.42877 20.4773C9.67408 20.6908 9.93203 20.9129 10.1983 21.1422C10.7073 21.5804 11.2466 22.0448 11.7859 22.5249C12.1073 22.8539 12.5716 23.0002 13.0002 23.0002C13.4288 23.0002 13.8931 22.8174 14.2145 22.5249C14.7538 22.0448 15.2931 21.5804 15.8021 21.1421C16.0684 20.9129 16.3263 20.6908 16.5716 20.4773L16.6793 20.3839C18.7408 18.5955 20.5222 17.0501 21.7859 15.5048C23.2859 13.6766 24.0002 11.9216 24.0002 9.98374C24.0002 8.08246 23.3573 6.32744 22.1788 5.04773C20.9645 3.73146 19.3573 3.0002 17.5716 3.0002C16.2145 3.0002 15.0002 3.43895 13.9288 4.2799C13.6818 4.47658 13.4348 4.69484 13.204 4.9347C13.1344 5.00698 13.0664 5.08122 13.0002 5.15742C12.934 5.08122 12.866 5.00698 12.7964 4.9347C12.5656 4.69484 12.3186 4.47658 12.0716 4.2799C11.0002 3.43895 9.7502 3.0002 8.42877 3.0002C6.64305 3.0002 5.0002 3.73146 3.82162 5.04773ZM4.97214 6.09052C4.06508 7.08792 3.58591 8.43851 3.58591 9.94718C3.58591 11.4697 4.15695 12.9045 5.41247 14.4757C6.58673 15.9252 8.31036 17.4158 10.3452 19.1756L10.4464 19.2632C10.5954 19.3928 10.7502 19.5267 10.9084 19.6634C11.5028 20.1773 12.1549 20.741 12.8062 21.3494C12.9092 21.4331 13.0976 21.432 13.1983 21.346C13.6996 20.9183 14.1671 20.499 14.6143 20.0979C14.9361 19.8092 15.2474 19.53 15.5533 19.2638L15.6552 19.1756C17.6901 17.4158 19.4137 15.9251 20.588 14.4757C21.8434 12.9044 22.4145 11.4697 22.4145 9.94718C22.4145 8.44444 21.9031 7.09072 21.0264 6.08846C20.1174 5.09005 18.9122 4.54334 17.5716 4.54334C16.5665 4.54334 15.672 4.85019 14.9082 5.49617L14.899 5.50394L14.8892 5.51095C14.5695 5.74006 14.3094 6.03596 13.9883 6.40132L13.979 6.41184C13.7476 6.69331 13.3807 6.88338 13.0002 6.88338C12.6176 6.88338 12.2487 6.69118 12.0175 6.40713L12.0138 6.4025C11.7408 6.05318 11.4394 5.74617 11.1112 5.51095L11.1046 5.50626L11.0983 5.50123C10.3264 4.88278 9.42742 4.54334 8.42877 4.54334C7.08392 4.54334 5.84571 5.09308 4.97589 6.08632L4.97214 6.09052ZM13.7502 6.21775L13.7749 6.18961C14.0864 5.83524 14.3665 5.51647 14.7145 5.26711C15.5359 4.57241 16.5002 4.24334 17.5716 4.24334C19.0002 4.24334 20.2859 4.82835 21.2502 5.88868C22.1788 6.94901 22.7145 8.37497 22.7145 9.94718C22.7145 11.556 22.1073 13.055 20.8216 14.6638C19.6304 16.1345 17.8892 17.6403 15.8678 19.3885L15.7502 19.4901C15.453 19.7487 15.1435 20.0263 14.8216 20.315C14.3698 20.7202 13.8936 21.1472 13.3931 21.5742C13.1788 21.757 12.8216 21.757 12.6073 21.5742C11.9588 20.968 11.3103 20.4074 10.7145 19.8923C10.5556 19.755 10.4005 19.621 10.2502 19.4901L10.1326 19.3885C8.11124 17.6403 6.37002 16.1345 5.17877 14.6638C3.89305 13.055 3.28591 11.556 3.28591 9.94718C3.28591 8.37497 3.78591 6.94901 4.7502 5.88868C5.67877 4.82835 7.0002 4.24334 8.42877 4.24334C9.5002 4.24334 10.4645 4.60897 11.2859 5.26711C11.6431 5.52305 11.9645 5.85211 12.2502 6.21775C12.4288 6.43712 12.7145 6.58338 13.0002 6.58338C13.2859 6.58338 13.5716 6.43712 13.7502 6.21775Z"
                    fill="#212B36"
                  />
                </svg>

                <span
                  class="d h i nc _c ye yf aj bj jj"
                >
                  3
                </span>
              </button>
            </div>
            <div
              x-show="wishlistOpen"
              @click.outside="wishlistOpen = false"
              class="d t i jb ed"
            >
              <div
                class="se ve af nf wf oh yg yj"
              >
                <div class="ff nf qi">
                  <div
                    class="ja sb je me ci"
                  >
                    <div class="sb je rh">
                      <div
                        class="ya hc oc kd se xe"
                      >
                        <img
                          src="src/assets/ecom-images/checkout/checkout-02/image-02.jpg"
                          alt="product image"
                          class="oc"
                        />
                      </div>
                      <div>
                        <a
                          href="javascript:void(0)"
                          class="xi dj gj ik"
                        >
                          Circular Sienna
                        </a>
                        <p
                          class="ue yi dj hj"
                        >
                          Awesome white shirt
                        </p>
                      </div>
                    </div>
                    <div class="rh">
                      <p class="ui bj gj">
                        $36.00
                      </p>
                    </div>
                  </div>
                  <div
                    class="ja sb je me ug"
                  >
                    <div class="sb je rh">
                      <div
                        class="ya hc oc kd se xe"
                      >
                        <img
                          src="src/assets/ecom-images/checkout/checkout-02/image-03.jpg"
                          alt="product image"
                          class="oc"
                        />
                      </div>
                      <div>
                        <a
                          href="javascript:void(0)"
                          class="xi dj gj ik"
                        >
                          Black T-shirt
                        </a>
                        <p
                          class="ue yi dj hj"
                        >
                          It's a nice black t-shirt
                        </p>
                      </div>
                    </div>
                    <div class="rh">
                      <p class="ui bj gj">
                        $36.00
                      </p>
                    </div>
                  </div>
                </div>

                <div>
                  <a
                    href="wishlist.html"
                    class="sb oc je le we yf gh ah si ui ej jj hk"
                  >
                    Go to Wishlist
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="e">
            <div class="sb zd ke">
              <button
                @click="cartOpen = !cartOpen"
                class="e sb hc tc je le lj"
              >
                <svg
                  width="26"
                  height="26"
                  viewBox="0 0 26 26"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M23.2783 8.00273H22.0596L19.2971 0.974601C19.1346 0.608976 18.7283 0.446476 18.3627 0.568351C17.9971 0.730851 17.8346 1.1371 17.9564 1.50273L20.5158 8.04335H5.44395L8.00332 1.50273C8.16582 1.1371 7.9627 0.730851 7.59707 0.568351C7.23145 0.405851 6.8252 0.608976 6.6627 0.974601L3.9002 8.00273H2.68145C2.07207 8.00273 1.54395 8.49023 1.54395 9.14023V12.5934C1.54395 13.2027 2.03145 13.7309 2.68145 13.7309H2.72207L3.77832 22.9934C3.94082 24.4152 5.15957 25.5121 6.62207 25.5121H19.2971C20.7596 25.5121 21.9783 24.4152 22.1408 22.9934L23.1971 13.7309H23.2377C23.8471 13.7309 24.3752 13.2434 24.3752 12.5934V9.14023C24.4158 8.53085 23.9283 8.00273 23.2783 8.00273ZM3.00645 9.4246H22.9939V12.2684H3.00645V9.4246ZM20.7596 22.7902C20.6783 23.5215 20.0689 24.0496 19.3377 24.0496H6.6627C5.93145 24.0496 5.32207 23.5215 5.24082 22.7902L4.18457 13.6902H21.8158L20.7596 22.7902Z"
                    fill="#212B36"
                  />
                  <path
                    d="M8.73467 20.6375C9.14092 20.6375 9.46592 20.3125 9.46592 19.9062V16.7781C9.46592 16.3719 9.14092 16.0469 8.73467 16.0469C8.32842 16.0469 8.00342 16.3719 8.00342 16.7781V19.9062C8.00342 20.3125 8.32842 20.6375 8.73467 20.6375Z"
                    fill="#212B36"
                  />
                  <path
                    d="M17.2659 20.6375C17.6722 20.6375 17.9972 20.3125 17.9972 19.9062V16.7781C17.9972 16.3719 17.6722 16.0469 17.2659 16.0469C16.8597 16.0469 16.5347 16.3719 16.5347 16.7781V19.9062C16.5753 20.3125 16.9003 20.6375 17.2659 20.6375Z"
                    fill="#212B36"
                  />
                </svg>

                <span
                  class="d h i nc _c ye yf aj bj jj"
                >
                  1
                </span>
              </button>
            </div>
            <div
              x-show="cartOpen"
              @click.outside="cartOpen = false"
              class="d t i jb ed"
            >
              <div
                class="se ve wf rg yj"
              >
                <div class="oa ff nf qi">
                  <div
                    class="ja sb je me ci"
                  >
                    <div class="sb je rh">
                      <div
                        class="ya hc oc kd se xe"
                      >
                        <img
                          src="src/assets/ecom-images/checkout/checkout-02/image-02.jpg"
                          alt="product image"
                          class="oc"
                        />
                      </div>
                      <div>
                        <a
                          href="product-details.html"
                          class="xi dj gj ik"
                        >
                          Circular Sienna
                        </a>
                        <p
                          class="ue yi dj hj"
                        >
                          Awesome white shirt
                        </p>
                      </div>
                    </div>
                    <div class="rh">
                      <p class="ui bj gj">
                        $36.00
                      </p>
                    </div>
                  </div>
                  <div
                    class="ja sb je me ug"
                  >
                    <div class="sb je rh">
                      <div
                        class="ya hc oc kd se xe"
                      >
                        <img
                          src="src/assets/ecom-images/checkout/checkout-02/image-03.jpg"
                          alt="product image"
                          class="oc"
                        />
                      </div>
                      <div>
                        <a
                          href="product-details.html"
                          class="xi dj gj ik"
                        >
                          Black T-shirt
                        </a>
                        <p
                          class="ue yi dj hj"
                        >
                          It's a nice black t-shirt
                        </p>
                      </div>
                    </div>
                    <div class="rh">
                      <p class="ui bj gj">
                        $36.00
                      </p>
                    </div>
                  </div>
                </div>
                <div class="ja ff nf xh">
                  <div
                    class="ra sb je me"
                  >
                    <div class="rh">
                      <p class="ui dj gj">
                        Subtotal
                      </p>
                    </div>
                    <div class="rh">
                      <p class="ui bj gj">
                        $108
                      </p>
                    </div>
                  </div>
                  <div
                    class="ra sb je me"
                  >
                    <div class="rh">
                      <p class="ui dj gj">
                        Shipping Cost (+)
                      </p>
                    </div>
                    <div class="rh">
                      <p class="ui bj gj">
                        $10.85
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
                      Total Payable
                    </p>
                  </div>
                  <div class="rh">
                    <p class="ui bj gj">
                      $88.15
                    </p>
                  </div>
                </div>

                <div>
                  <a
                    href="checkout.html"
                    class="sb oc je le we yf gh ah si ui ej jj hk"
                  >
                    Place Order
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

    <!-- ====== Navbar Section End -->