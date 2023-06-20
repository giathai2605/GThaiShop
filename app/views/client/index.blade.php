@extends('client.layout.main')
@section('content')

    <!-- ====== eCommerce Header Section Start -->
    <section
      x-data="
        {
          slides: ['1', '2'],
          activeSlide: 1
        }
      "
      class="e"
    >
      <div
        class="snap da sb ac oc md ie se ei bk"
        x-ref="carousel"
      >
        <div
          class="e y da wb fd se xf"
        >
          <div class="a da">
            <div class="ea sb he je">
              <div class="oc vg ao/2">
                <div class="ab nd jn">
                  <span
                    class="ra qb wi bj ij"
                  >
                    Start From $299
                  </span>
                  <h2
                    class="xa zi bj gj _l kp nq"
                  >
                    Ultra HD Quality Bluetooth Sound Speakers
                  </h2>
                  <p
                    class="ua ui dj hj"
                  >
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Vestibulum ornare vestibulum mollis. Nam vitae augue purus.
                  </p>

                  <a
                    href="filters.html"
                    class="tb je le ye yf gh dh si ui bj jj hk"
                  >
                    Shop Now
                  </a>
                </div>
              </div>

              <div class="oc vg ao/2">
                <div class="hh si">
                  <img
                    src="src/assets/ecom-images/headers/header-03/image-01.jpg"
                    alt="product"
                    class="da od"
                  />
                </div>
              </div>
            </div>
          </div>

          <div class="d h i z">
            <svg
              width="620"
              height="560"
              viewBox="0 0 620 560"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M0 560L256.5 0H620V560H0Z"
                fill="url(#paint0_linear_2066_370)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_2066_370"
                  x1="100.001"
                  y1="280"
                  x2="535.002"
                  y2="280"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#3056D3" stop-opacity="0.08" />
                  <stop offset="1" stop-color="#3056D3" stop-opacity="0" />
                </linearGradient>
              </defs>
            </svg>
          </div>
          <div class="d h i z">
            <svg
              width="536"
              height="560"
              viewBox="0 0 536 560"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M0.998535 560L257.499 0H535.999V560H0.998535Z"
                fill="url(#paint0_linear_2066_368)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_2066_368"
                  x1="101"
                  y1="280"
                  x2="536"
                  y2="280"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#3056D3" stop-opacity="0.08" />
                  <stop offset="1" stop-color="#3056D3" stop-opacity="0" />
                </linearGradient>
              </defs>
            </svg>
          </div>
        </div>
        <div
          class="e y da wb fd se xf"
        >
          <div class="a da">
            <div class="ea sb he je">
              <div class="oc vg ao/2">
                <div class="ab nd jn">
                  <span
                    class="ra qb wi bj ij"
                  >
                    Start From $299
                  </span>
                  <h2
                    class="xa zi bj gj _l kp nq"
                  >
                    Ultra HD Quality Bluetooth Sound Speakers
                  </h2>
                  <p
                    class="ua ui dj hj"
                  >
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Vestibulum ornare vestibulum mollis. Nam vitae augue purus.
                  </p>

                  <a
                    href="filters.html"
                    class="tb je le ye yf gh dh si ui bj jj hk"
                  >
                    Shop Now
                  </a>
                </div>
              </div>

              <div class="oc vg ao/2">
                <div class="hh si">
                  <img
                    src="src/assets/ecom-images/headers/header-03/image-01.jpg"
                    alt="product"
                    class="da od"
                  />
                </div>
              </div>
            </div>
          </div>

          <div class="d h i z">
            <svg
              width="620"
              height="560"
              viewBox="0 0 620 560"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M0 560L256.5 0H620V560H0Z"
                fill="url(#paint0_linear_2066_370)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_2066_370"
                  x1="100.001"
                  y1="280"
                  x2="535.002"
                  y2="280"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#3056D3" stop-opacity="0.08" />
                  <stop offset="1" stop-color="#3056D3" stop-opacity="0" />
                </linearGradient>
              </defs>
            </svg>
          </div>
          <div class="d h i z">
            <svg
              width="536"
              height="560"
              viewBox="0 0 536 560"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M0.998535 560L257.499 0H535.999V560H0.998535Z"
                fill="url(#paint0_linear_2066_368)"
              />
              <defs>
                <linearGradient
                  id="paint0_linear_2066_368"
                  x1="101"
                  y1="280"
                  x2="536"
                  y2="280"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#3056D3" stop-opacity="0.08" />
                  <stop offset="1" stop-color="#3056D3" stop-opacity="0" />
                </linearGradient>
              </defs>
            </svg>
          </div>
        </div>
      </div>
      <div>
        <button
          class="d g/2 j _ sb bc tc je le ye af qf wf ij bk ck fk jk"
          @click="$refs.carousel.scrollLeft = $refs.carousel.scrollLeft - ($refs.carousel.scrollWidth / slides.length); activeSlide -= 1"
        >
          <svg
            width="10"
            height="18"
            viewBox="0 0 10 18"
            class="kg"
          >
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M2.30951 9.00278L9.7025 1.75393L9.71157 1.74417C10.0883 1.33897 10.0904 0.706394 9.65025 0.300611C9.44618 0.112467 9.14292 -7.49282e-08 8.8652 -9.92075e-08C8.51706 -1.29642e-07 8.25215 0.142032 8.05041 0.328028L8.04343 0.334467L0.54447 7.71467L0.54358 7.71554C-0.187229 8.4299 -0.171766 9.58059 0.533431 10.3072L0.538425 10.3124L8.04382 17.6715L8.05041 17.6775C8.44903 18.0451 9.16205 18.1551 9.65025 17.705C10.0468 17.3394 10.1669 16.687 9.68767 16.2371L2.30951 9.00278Z"
            />
          </svg>
        </button>
        <button
          class="d k g/2 l _ sb bc tc je le ye af qf wf ij bk ck fk jk"
          @click="$refs.carousel.scrollLeft = $refs.carousel.scrollLeft + ($refs.carousel.scrollWidth / slides.length); activeSlide += 1"
        >
          <svg
            width="10"
            height="18"
            viewBox="0 0 10 18"
            class="kg"
          >
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M7.69049 8.99722L0.297501 16.2461L0.288433 16.2558C-0.0882772 16.661 -0.0903769 17.2936 0.34975 17.6994C0.553818 17.8875 0.857078 18 1.1348 18C1.48294 18 1.74785 17.858 1.94959 17.672L1.95658 17.6655L9.45553 10.2853L9.45642 10.2845C10.1872 9.5701 10.1718 8.41941 9.46657 7.69275L9.46158 7.68761L1.95618 0.32853L1.94959 0.322458C1.55097 -0.0450574 0.837946 -0.15506 0.34975 0.295041C-0.0467678 0.660617 -0.166916 1.31301 0.312333 1.7629L7.69049 8.99722Z"
            />
          </svg>
        </button>
      </div>
    </section>
    <!-- ====== eCommerce Header Section End -->

    <!-- ====== Category Section Start -->
    <section class="wf hh">
      <div class="a da">
        <div class="ea sb he">
          <div class="oc vg ao/2">
            <div
              class="e na gl tn wp"
            >
              <img
                src="src/assets/ecom-images/categories/category-03/image-01.jpg"
                alt="category"
                class="wb oc mg ng"
              />
              <div
                class="d h m wb oc xg yg vl"
              >
                <div class="pd">
                  <span
                    class="ra qb ui bj hj"
                  >
                    #House
                  </span>
                  <a
                    href="filters.html"
                    class="vi bj gj yl lp oq"
                  >
                    Express Your Beautiful Life Through Furniture
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="oc vg ao/2">
            <div
              class="e na cc hl un xp"
            >
              <img
                src="src/assets/ecom-images/categories/category-03/image-02.jpg"
                alt="category"
                class="wb oc mg ng"
              />
              <div
                class="d h m wb oc xg yg vl"
              >
                <div class="pd">
                  <span
                    class="ra qb ui bj hj"
                  >
                    #Accessories
                  </span>
                  <a
                    href="filters.html"
                    class="vi bj gj yl lp oq"
                  >
                    Discover Our Accessories Collection
                  </a>
                </div>
              </div>
            </div>

            <div
              class="e na cc hl un xp"
            >
              <img
                src="src/assets/ecom-images/categories/category-03/image-03.jpg"
                alt="category"
                class="wb oc mg ng"
              />
              <div
                class="d h m wb oc xg yg vl"
              >
                <div class="pd">
                  <span
                    class="ra qb ui bj hj"
                  >
                    #Office
                  </span>
                  <a
                    href="filters.html"
                    class="vi bj gj yl lp oq"
                  >
                    Make Your Workspace More Comfortable
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Category Section End -->

    <!-- ====== Products Carousel Section Start -->
    <section
      class="zf ai bi bp cp"
    >
      <div class="a da">
        <div class="ea sb he">
          <div class="oc vg">
            <div
              class="da la qd si kn"
            >
              <h2
                class="xa _i cj lj _l xm"
              >
                Our Latest Products
              </h2>
              <p class="ui hj">
                There are many variations of passages of Lorem Ipsum available
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>

        <div
          x-data="
            {
              slides: ['1','2','3', '4'],
            }
          "
        >
          <div class="e sb le">
            <div class="e oc fi">
              <div
                class="snap da sb ac oc rd ie se bk zk tl lm go fq 2xl:ud-max-w-[1320px]"
                x-ref="carousel"
              >
                <div
                  class="da wb gd vg yk ql jm fo eq 2xl:ud-min-w-[430px]"
                >
                  <div
                    class="se ve af nf wf"
                  >
                    <div>
                      <img
                        src="src/assets/ecom-images/products/product-carousel-05/image-01.jpg"
                        alt="product"
                        class="oc"
                      />
                    </div>
                    <div class="og">
                      <a
                        href="product-details.html"
                        class="xa qb wi bj gj ik al jp mq"
                      >
                        Apple Watch Series 7
                      </a>
                      <p class="ui dj hj">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        enim luctus et lorem.
                      </p>
                    </div>
                    <div
                      class="sb me hf nf"
                    >
                      <div
                        class="sb je ug wg _k to jq"
                      >
                        <span class="za">
                          <svg
                            class="zb rc wk xk fl kl sn _n vp aq"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M18.6562 7.46875L12.9999 6.59375L10.4375 1.21875C10.25 0.84375 9.74995 0.84375 9.56245 1.21875L6.99995 6.625L1.37495 7.46875C0.9687 7.53125 0.81245 8.0625 1.12495 8.34375L5.2187 12.5625L4.24995 18.4688C4.18745 18.875 4.5937 19.2188 4.9687 18.9688L10.0624 16.1875L15.1249 18.9688C15.4687 19.1562 15.9062 18.8438 15.8124 18.4688L14.8437 12.5625L18.9374 8.34375C19.1874 8.0625 19.0624 7.53125 18.6562 7.46875Z"
                              fill="#FFA645"
                            />
                          </svg>
                        </span>
                        <span class="za">
                          <svg
                            class="zb rc wk xk fl kl sn _n vp aq"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M18.6562 7.46875L12.9999 6.59375L10.4375 1.21875C10.25 0.84375 9.74995 0.84375 9.56245 1.21875L6.99995 6.625L1.37495 7.46875C0.9687 7.53125 0.81245 8.0625 1.12495 8.34375L5.2187 12.5625L4.24995 18.4688C4.18745 18.875 4.5937 19.2188 4.9687 18.9688L10.0624 16.1875L15.1249 18.9688C15.4687 19.1562 15.9062 18.8438 15.8124 18.4688L14.8437 12.5625L18.9374 8.34375C19.1874 8.0625 19.0624 7.53125 18.6562 7.46875Z"
                              fill="#FFA645"
                            />
                          </svg>
                        </span>
                        <span class="za">
                          <svg
                            class="zb rc wk xk fl kl sn _n vp aq"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M18.6562 7.46875L12.9999 6.59375L10.4375 1.21875C10.25 0.84375 9.74995 0.84375 9.56245 1.21875L6.99995 6.625L1.37495 7.46875C0.9687 7.53125 0.81245 8.0625 1.12495 8.34375L5.2187 12.5625L4.24995 18.4688C4.18745 18.875 4.5937 19.2188 4.9687 18.9688L10.0624 16.1875L15.1249 18.9688C15.4687 19.1562 15.9062 18.8438 15.8124 18.4688L14.8437 12.5625L18.9374 8.34375C19.1874 8.0625 19.0624 7.53125 18.6562 7.46875Z"
                              fill="#FFA645"
                            />
                          </svg>
                        </span>
                        <span class="za">
                          <svg
                            class="zb rc wk xk fl kl sn _n vp aq"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M18.6562 7.46875L12.9999 6.59375L10.4375 1.21875C10.25 0.84375 9.74995 0.84375 9.56245 1.21875L6.99995 6.625L1.37495 7.46875C0.9687 7.53125 0.81245 8.0625 1.12495 8.34375L5.2187 12.5625L4.24995 18.4688C4.18745 18.875 4.5937 19.2188 4.9687 18.9688L10.0624 16.1875L15.1249 18.9688C15.4687 19.1562 15.9062 18.8438 15.8124 18.4688L14.8437 12.5625L18.9374 8.34375C19.1874 8.0625 19.0624 7.53125 18.6562 7.46875Z"
                              fill="#FFA645"
                            />
                          </svg>
                        </span>
                        <span class="za">
                          <svg
                            class="zb rc wk xk fl kl sn _n vp aq"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M18.6562 7.46875L12.9999 6.59375L10.4375 1.21875C10.25 0.84375 9.74995 0.84375 9.56245 1.21875L6.99995 6.625L1.37495 7.46875C0.9687 7.53125 0.81245 8.0625 1.12495 8.34375L5.2187 12.5625L4.24995 18.4688C4.18745 18.875 4.5937 19.2188 4.9687 18.9688L10.0624 16.1875L15.1249 18.9688C15.4687 19.1562 15.9062 18.8438 15.8124 18.4688L14.8437 12.5625L18.9374 8.34375C19.1874 8.0625 19.0624 7.53125 18.6562 7.46875Z"
                              fill="#FFA645"
                            />
                          </svg>
                        </span>

                        <span
                          class="di xi bj hj"
                        >
                          (55) Reviews
                        </span>
                      </div>
                      <div
                        class="gf nf ug wg _k to jq"
                      >
                        <span
                          class="ui bj gj"
                        >
                          $299
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="da wb gd vg yk ql jm fo eq 2xl:ud-min-w-[430px]"
                >
                  <div
                    class="se ve af nf wf"
                  >
                    <div>
                      <img
                        src="src/assets/ecom-images/products/product-carousel-05/image-02.jpg"
                        alt="product"
                        class="oc"
                      />
                    </div>
                    <div class="og">
                      <a
                        href="product-details.html"
                        class="xa qb wi bj gj ik al jp mq"
                      >
                        iPhone 13 Pro Max
                      </a>
                      <p class="ui dj hj">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        enim luctus et lorem.
                      </p>
                    </div>
                    <div
                      class="sb me hf nf"
                    >
                      <div
                        class="sb je ug wg _k to jq"
                      >
                        <span class="za">
                          <svg
                            class="zb rc wk xk fl kl sn _n vp aq"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M18.6562 7.46875L12.9999 6.59375L10.4375 1.21875C10.25 0.84375 9.74995 0.84375 9.56245 1.21875L6.99995 6.625L1.37495 7.46875C0.9687 7.53125 0.81245 8.0625 1.12495 8.34375L5.2187 12.5625L4.24995 18.4688C4.18745 18.875 4.5937 19.2188 4.9687 18.9688L10.0624 16.1875L15.1249 18.9688C15.4687 19.1562 15.9062 18.8438 15.8124 18.4688L14.8437 12.5625L18.9374 8.34375C19.1874 8.0625 19.0624 7.53125 18.6562 7.46875Z"
                              fill="#FFA645"
                            />
                          </svg>
                        </span>
                        <span class="za">
                          <svg
                            class="zb rc wk xk fl kl sn _n vp aq"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M18.6562 7.46875L12.9999 6.59375L10.4375 1.21875C10.25 0.84375 9.74995 0.84375 9.56245 1.21875L6.99995 6.625L1.37495 7.46875C0.9687 7.53125 0.81245 8.0625 1.12495 8.34375L5.2187 12.5625L4.24995 18.4688C4.18745 18.875 4.5937 19.2188 4.9687 18.9688L10.0624 16.1875L15.1249 18.9688C15.4687 19.1562 15.9062 18.8438 15.8124 18.4688L14.8437 12.5625L18.9374 8.34375C19.1874 8.0625 19.0624 7.53125 18.6562 7.46875Z"
                              fill="#FFA645"
                            />
                          </svg>
                        </span>
                        <span class="za">
                          <svg
                            class="zb rc wk xk fl kl sn _n vp aq"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M18.6562 7.46875L12.9999 6.59375L10.4375 1.21875C10.25 0.84375 9.74995 0.84375 9.56245 1.21875L6.99995 6.625L1.37495 7.46875C0.9687 7.53125 0.81245 8.0625 1.12495 8.34375L5.2187 12.5625L4.24995 18.4688C4.18745 18.875 4.5937 19.2188 4.9687 18.9688L10.0624 16.1875L15.1249 18.9688C15.4687 19.1562 15.9062 18.8438 15.8124 18.4688L14.8437 12.5625L18.9374 8.34375C19.1874 8.0625 19.0624 7.53125 18.6562 7.46875Z"
                              fill="#FFA645"
                            />
                          </svg>
                        </span>
                        <span class="za">
                          <svg
                            class="zb rc wk xk fl kl sn _n vp aq"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M18.6562 7.46875L12.9999 6.59375L10.4375 1.21875C10.25 0.84375 9.74995 0.84375 9.56245 1.21875L6.99995 6.625L1.37495 7.46875C0.9687 7.53125 0.81245 8.0625 1.12495 8.34375L5.2187 12.5625L4.24995 18.4688C4.18745 18.875 4.5937 19.2188 4.9687 18.9688L10.0624 16.1875L15.1249 18.9688C15.4687 19.1562 15.9062 18.8438 15.8124 18.4688L14.8437 12.5625L18.9374 8.34375C19.1874 8.0625 19.0624 7.53125 18.6562 7.46875Z"
                              fill="#FFA645"
                            />
                          </svg>
                        </span>
                        <span class="za">
                          <svg
                            class="zb rc wk xk fl kl sn _n vp aq"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M18.6562 7.46875L12.9999 6.59375L10.4375 1.21875C10.25 0.84375 9.74995 0.84375 9.56245 1.21875L6.99995 6.625L1.37495 7.46875C0.9687 7.53125 0.81245 8.0625 1.12495 8.34375L5.2187 12.5625L4.24995 18.4688C4.18745 18.875 4.5937 19.2188 4.9687 18.9688L10.0624 16.1875L15.1249 18.9688C15.4687 19.1562 15.9062 18.8438 15.8124 18.4688L14.8437 12.5625L18.9374 8.34375C19.1874 8.0625 19.0624 7.53125 18.6562 7.46875Z"
                              fill="#FFA645"
                            />
                          </svg>
                        </span>

                        <span
                          class="di xi bj hj"
                        >
                          (32) Reviews
                        </span>
                      </div>
                      <div
                        class="gf nf ug wg _k to jq"
                      >
                        <span
                          class="ui bj gj"
                        >
                          $999
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="da wb gd vg yk ql jm fo eq 2xl:ud-min-w-[430px]"
                >
                  <div
                    class="se ve af nf wf"
                  >
                    <div>
                      <img
                        src="src/assets/ecom-images/products/product-carousel-05/image-03.jpg"
                        alt="product"
                        class="oc"
                      />
                    </div>
                    <div class="og">
                      <a
                        href="product-details.html"
                        class="xa qb wi bj gj ik al jp mq"
                      >
                        Macbook Pro 13” M1 2020
                      </a>
                      <p class="ui dj hj">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        enim luctus et lorem.
                      </p>
                    </div>
                    <div
                      class="sb me hf nf"
                    >
                      <div
                        class="sb je ug wg _k to jq"
                      >
                        <span class="za">
                          <svg
                            class="zb rc wk xk fl kl sn _n vp aq"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M18.6562 7.46875L12.9999 6.59375L10.4375 1.21875C10.25 0.84375 9.74995 0.84375 9.56245 1.21875L6.99995 6.625L1.37495 7.46875C0.9687 7.53125 0.81245 8.0625 1.12495 8.34375L5.2187 12.5625L4.24995 18.4688C4.18745 18.875 4.5937 19.2188 4.9687 18.9688L10.0624 16.1875L15.1249 18.9688C15.4687 19.1562 15.9062 18.8438 15.8124 18.4688L14.8437 12.5625L18.9374 8.34375C19.1874 8.0625 19.0624 7.53125 18.6562 7.46875Z"
                              fill="#FFA645"
                            />
                          </svg>
                        </span>
                        <span class="za">
                          <svg
                            class="zb rc wk xk fl kl sn _n vp aq"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M18.6562 7.46875L12.9999 6.59375L10.4375 1.21875C10.25 0.84375 9.74995 0.84375 9.56245 1.21875L6.99995 6.625L1.37495 7.46875C0.9687 7.53125 0.81245 8.0625 1.12495 8.34375L5.2187 12.5625L4.24995 18.4688C4.18745 18.875 4.5937 19.2188 4.9687 18.9688L10.0624 16.1875L15.1249 18.9688C15.4687 19.1562 15.9062 18.8438 15.8124 18.4688L14.8437 12.5625L18.9374 8.34375C19.1874 8.0625 19.0624 7.53125 18.6562 7.46875Z"
                              fill="#FFA645"
                            />
                          </svg>
                        </span>
                        <span class="za">
                          <svg
                            class="zb rc wk xk fl kl sn _n vp aq"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M18.6562 7.46875L12.9999 6.59375L10.4375 1.21875C10.25 0.84375 9.74995 0.84375 9.56245 1.21875L6.99995 6.625L1.37495 7.46875C0.9687 7.53125 0.81245 8.0625 1.12495 8.34375L5.2187 12.5625L4.24995 18.4688C4.18745 18.875 4.5937 19.2188 4.9687 18.9688L10.0624 16.1875L15.1249 18.9688C15.4687 19.1562 15.9062 18.8438 15.8124 18.4688L14.8437 12.5625L18.9374 8.34375C19.1874 8.0625 19.0624 7.53125 18.6562 7.46875Z"
                              fill="#FFA645"
                            />
                          </svg>
                        </span>
                        <span class="za">
                          <svg
                            class="zb rc wk xk fl kl sn _n vp aq"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M18.6562 7.46875L12.9999 6.59375L10.4375 1.21875C10.25 0.84375 9.74995 0.84375 9.56245 1.21875L6.99995 6.625L1.37495 7.46875C0.9687 7.53125 0.81245 8.0625 1.12495 8.34375L5.2187 12.5625L4.24995 18.4688C4.18745 18.875 4.5937 19.2188 4.9687 18.9688L10.0624 16.1875L15.1249 18.9688C15.4687 19.1562 15.9062 18.8438 15.8124 18.4688L14.8437 12.5625L18.9374 8.34375C19.1874 8.0625 19.0624 7.53125 18.6562 7.46875Z"
                              fill="#FFA645"
                            />
                          </svg>
                        </span>
                        <span class="za">
                          <svg
                            class="zb rc wk xk fl kl sn _n vp aq"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M18.6562 7.46875L12.9999 6.59375L10.4375 1.21875C10.25 0.84375 9.74995 0.84375 9.56245 1.21875L6.99995 6.625L1.37495 7.46875C0.9687 7.53125 0.81245 8.0625 1.12495 8.34375L5.2187 12.5625L4.24995 18.4688C4.18745 18.875 4.5937 19.2188 4.9687 18.9688L10.0624 16.1875L15.1249 18.9688C15.4687 19.1562 15.9062 18.8438 15.8124 18.4688L14.8437 12.5625L18.9374 8.34375C19.1874 8.0625 19.0624 7.53125 18.6562 7.46875Z"
                              fill="#FFA645"
                            />
                          </svg>
                        </span>

                        <span
                          class="di xi bj hj"
                        >
                          (15) Reviews
                        </span>
                      </div>
                      <div
                        class="gf nf ug wg _k to jq"
                      >
                        <span
                          class="ui bj gj"
                        >
                          $1299
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="da wb gd vg yk ql jm fo eq 2xl:ud-min-w-[430px]"
                >
                  <div
                    class="se ve af nf wf"
                  >
                    <div>
                      <img
                        src="src/assets/ecom-images/products/product-carousel-05/image-02.jpg"
                        alt="product"
                        class="oc"
                      />
                    </div>
                    <div class="og">
                      <a
                        href="product-details.html"
                        class="xa qb wi bj gj ik al jp mq"
                      >
                        iPhone 13 Pro Max
                      </a>
                      <p class="ui dj hj">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        enim luctus et lorem.
                      </p>
                    </div>
                    <div
                      class="sb me hf nf"
                    >
                      <div
                        class="sb je ug wg _k to jq"
                      >
                        <span class="za">
                          <svg
                            class="zb rc wk xk fl kl sn _n vp aq"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M18.6562 7.46875L12.9999 6.59375L10.4375 1.21875C10.25 0.84375 9.74995 0.84375 9.56245 1.21875L6.99995 6.625L1.37495 7.46875C0.9687 7.53125 0.81245 8.0625 1.12495 8.34375L5.2187 12.5625L4.24995 18.4688C4.18745 18.875 4.5937 19.2188 4.9687 18.9688L10.0624 16.1875L15.1249 18.9688C15.4687 19.1562 15.9062 18.8438 15.8124 18.4688L14.8437 12.5625L18.9374 8.34375C19.1874 8.0625 19.0624 7.53125 18.6562 7.46875Z"
                              fill="#FFA645"
                            />
                          </svg>
                        </span>
                        <span class="za">
                          <svg
                            class="zb rc wk xk fl kl sn _n vp aq"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M18.6562 7.46875L12.9999 6.59375L10.4375 1.21875C10.25 0.84375 9.74995 0.84375 9.56245 1.21875L6.99995 6.625L1.37495 7.46875C0.9687 7.53125 0.81245 8.0625 1.12495 8.34375L5.2187 12.5625L4.24995 18.4688C4.18745 18.875 4.5937 19.2188 4.9687 18.9688L10.0624 16.1875L15.1249 18.9688C15.4687 19.1562 15.9062 18.8438 15.8124 18.4688L14.8437 12.5625L18.9374 8.34375C19.1874 8.0625 19.0624 7.53125 18.6562 7.46875Z"
                              fill="#FFA645"
                            />
                          </svg>
                        </span>
                        <span class="za">
                          <svg
                            class="zb rc wk xk fl kl sn _n vp aq"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M18.6562 7.46875L12.9999 6.59375L10.4375 1.21875C10.25 0.84375 9.74995 0.84375 9.56245 1.21875L6.99995 6.625L1.37495 7.46875C0.9687 7.53125 0.81245 8.0625 1.12495 8.34375L5.2187 12.5625L4.24995 18.4688C4.18745 18.875 4.5937 19.2188 4.9687 18.9688L10.0624 16.1875L15.1249 18.9688C15.4687 19.1562 15.9062 18.8438 15.8124 18.4688L14.8437 12.5625L18.9374 8.34375C19.1874 8.0625 19.0624 7.53125 18.6562 7.46875Z"
                              fill="#FFA645"
                            />
                          </svg>
                        </span>
                        <span class="za">
                          <svg
                            class="zb rc wk xk fl kl sn _n vp aq"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M18.6562 7.46875L12.9999 6.59375L10.4375 1.21875C10.25 0.84375 9.74995 0.84375 9.56245 1.21875L6.99995 6.625L1.37495 7.46875C0.9687 7.53125 0.81245 8.0625 1.12495 8.34375L5.2187 12.5625L4.24995 18.4688C4.18745 18.875 4.5937 19.2188 4.9687 18.9688L10.0624 16.1875L15.1249 18.9688C15.4687 19.1562 15.9062 18.8438 15.8124 18.4688L14.8437 12.5625L18.9374 8.34375C19.1874 8.0625 19.0624 7.53125 18.6562 7.46875Z"
                              fill="#FFA645"
                            />
                          </svg>
                        </span>
                        <span class="za">
                          <svg
                            class="zb rc wk xk fl kl sn _n vp aq"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M18.6562 7.46875L12.9999 6.59375L10.4375 1.21875C10.25 0.84375 9.74995 0.84375 9.56245 1.21875L6.99995 6.625L1.37495 7.46875C0.9687 7.53125 0.81245 8.0625 1.12495 8.34375L5.2187 12.5625L4.24995 18.4688C4.18745 18.875 4.5937 19.2188 4.9687 18.9688L10.0624 16.1875L15.1249 18.9688C15.4687 19.1562 15.9062 18.8438 15.8124 18.4688L14.8437 12.5625L18.9374 8.34375C19.1874 8.0625 19.0624 7.53125 18.6562 7.46875Z"
                              fill="#FFA645"
                            />
                          </svg>
                        </span>

                        <span
                          class="di xi bj hj"
                        >
                          (32) Reviews
                        </span>
                      </div>
                      <div
                        class="gf nf ug wg _k to jq"
                      >
                        <span
                          class="ui bj gj"
                        >
                          $999
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="d m i n sb je le"
              >
                <div
                  class="tb oe ye af nf qg"
                >
                  <button
                    class="sb dc uc je le ye af nf wf hj ck fk jk"
                    @click="$refs.carousel.scrollLeft = $refs.carousel.scrollLeft - ($refs.carousel.scrollWidth / slides.length); activeSlide -= 1"
                  >
                    <svg
                      width="15"
                      height="13"
                      viewBox="0 0 15 13"
                      class="kg"
                    >
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M5.24264 11.8033L0.46967 7.03037C0.176777 6.73748 0.176777 6.2626 0.46967 5.96971L5.24264 1.19674C5.53553 0.903845 6.01041 0.903845 6.3033 1.19674C6.59619 1.48963 6.59619 1.96451 6.3033 2.2574L2.81066 5.75004H14C14.4142 5.75004 14.75 6.08583 14.75 6.50004C14.75 6.91425 14.4142 7.25004 14 7.25004H2.81066L6.3033 10.7427C6.59619 11.0356 6.59619 11.5104 6.3033 11.8033C6.01041 12.0962 5.53553 12.0962 5.24264 11.8033Z"
                      />
                    </svg>
                  </button>
                  <button
                    class="sb dc uc je le ye af nf wf hj ck fk jk"
                    @click="$refs.carousel.scrollLeft = $refs.carousel.scrollLeft + ($refs.carousel.scrollWidth / slides.length); activeSlide += 1"
                  >
                    <svg
                      width="15"
                      height="13"
                      viewBox="0 0 15 13"
                      class="kg"
                    >
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M9.75736 11.8033L14.5303 7.03037C14.8232 6.73748 14.8232 6.2626 14.5303 5.96971L9.75736 1.19674C9.46447 0.903845 8.98959 0.903845 8.6967 1.19674C8.40381 1.48963 8.40381 1.96451 8.6967 2.2574L12.1893 5.75004H1C0.585786 5.75004 0.25 6.08583 0.25 6.50004C0.25 6.91425 0.585786 7.25004 1 7.25004H12.1893L8.6967 10.7427C8.40381 11.0356 8.40381 11.5104 8.6967 11.8033C8.98959 12.0962 9.46447 12.0962 9.75736 11.8033Z"
                      />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Products Carousel Section End -->

    <!-- ====== Product Grids Start -->
    <section class="wf hh uo">
      <div class="a da">
        <div class="ea sb he">
          <div class="oc vg">
            <div
              class="da la qd si kn"
            >
              <h2
                class="xa _i cj lj _l xm"
              >
                Trending Products
              </h2>
              <p class="ui hj">
                There are many variations of passages of Lorem Ipsum available
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>

        <div class="ve af nf">
          <div class="sb he">
            <div
              class="oc ff nf vg im/2 om ao/3"
            >
              <div class="na bb">
                <div class="oa se we">
                  <img
                    src="src/assets/ecom-images/products/products-grids-05/image-01.jpg"
                    alt="product"
                    class="oc"
                  />
                </div>
                <div>
                  <span
                    class="wa qb ui bj gj am ym 2xl:ud-text-xl"
                  >
                    $59.55
                  </span>

                  <h3>
                    <a
                      href="product-details.html"
                      class="wa qb vi bj gj ik bm ym 2xl:ud-text-2xl"
                    >
                      Table Top Showpiece
                    </a>
                  </h3>
                  <p
                    class="sb je ui dj hj"
                  >
                    <span class="gi">
                      <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z"
                          fill="#FFA645"
                        />
                      </svg>
                    </span>
                    <span class="gi">
                      <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z"
                          fill="#FFA645"
                        />
                      </svg>
                    </span>
                    <span class="gi">
                      <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z"
                          fill="#FFA645"
                        />
                      </svg>
                    </span>
                    <span class="gi">
                      <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z"
                          fill="#FFA645"
                        />
                      </svg>
                    </span>
                    <span class="hi">
                      <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z"
                          stroke="#FFA645"
                        />
                      </svg>
                    </span>

                    115 Reviews
                  </p>
                </div>
              </div>
            </div>
            <div
              class="oc ff nf vg im/2 ao/3 lo"
            >
              <div class="na bb">
                <div class="oa se we">
                  <img
                    src="src/assets/ecom-images/products/products-grids-05/image-02.jpg"
                    alt="product"
                    class="oc"
                  />
                </div>
                <div>
                  <span
                    class="wa qb ui bj gj am ym 2xl:ud-text-xl"
                  >
                    $40.00
                  </span>

                  <h3>
                    <a
                      href="product-details.html"
                      class="wa qb vi bj gj ik bm ym 2xl:ud-text-2xl"
                    >
                      Ceramic Coffee Mug
                    </a>
                  </h3>
                  <p
                    class="sb je ui dj hj"
                  >
                    <span class="gi">
                      <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z"
                          fill="#FFA645"
                        />
                      </svg>
                    </span>
                    <span class="gi">
                      <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z"
                          fill="#FFA645"
                        />
                      </svg>
                    </span>
                    <span class="gi">
                      <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z"
                          fill="#FFA645"
                        />
                      </svg>
                    </span>
                    <span class="gi">
                      <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z"
                          fill="#FFA645"
                        />
                      </svg>
                    </span>
                    <span class="hi">
                      <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z"
                          stroke="#FFA645"
                        />
                      </svg>
                    </span>

                    55 Reviews
                  </p>
                </div>
              </div>
            </div>
            <div
              class="oc ff nf vg im/2 om ao/3 mo"
            >
              <div class="na bb">
                <div class="oa se we">
                  <img
                    src="src/assets/ecom-images/products/products-grids-05/image-03.jpg"
                    alt="product"
                    class="oc"
                  />
                </div>
                <div>
                  <span
                    class="wa qb ui bj gj am ym 2xl:ud-text-xl"
                  >
                    $80.00
                  </span>

                  <h3>
                    <a
                      href="product-details.html"
                      class="wa qb vi bj gj ik bm ym 2xl:ud-text-2xl"
                    >
                      Modern Coffee Mug
                    </a>
                  </h3>
                  <p
                    class="sb je ui dj hj"
                  >
                    <span class="gi">
                      <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z"
                          fill="#FFA645"
                        />
                      </svg>
                    </span>
                    <span class="gi">
                      <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z"
                          fill="#FFA645"
                        />
                      </svg>
                    </span>
                    <span class="gi">
                      <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z"
                          fill="#FFA645"
                        />
                      </svg>
                    </span>
                    <span class="gi">
                      <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z"
                          fill="#FFA645"
                        />
                      </svg>
                    </span>
                    <span class="hi">
                      <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z"
                          stroke="#FFA645"
                        />
                      </svg>
                    </span>

                    8 Reviews
                  </p>
                </div>
              </div>
            </div>
            <div
              class="oc ff nf vg im/2 ao/3 no lo"
            >
              <div class="na bb">
                <div class="oa se we">
                  <img
                    src="src/assets/ecom-images/products/products-grids-05/image-04.jpg"
                    alt="product"
                    class="oc"
                  />
                </div>
                <div>
                  <span
                    class="wa qb ui bj gj am ym 2xl:ud-text-xl"
                  >
                    $49.55
                  </span>

                  <h3>
                    <a
                      href="product-details.html"
                      class="wa qb vi bj gj ik bm ym 2xl:ud-text-2xl"
                    >
                      Metal Table Lamp
                    </a>
                  </h3>
                  <p
                    class="sb je ui dj hj"
                  >
                    <span class="gi">
                      <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z"
                          fill="#FFA645"
                        />
                      </svg>
                    </span>
                    <span class="gi">
                      <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z"
                          fill="#FFA645"
                        />
                      </svg>
                    </span>
                    <span class="gi">
                      <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z"
                          fill="#FFA645"
                        />
                      </svg>
                    </span>
                    <span class="gi">
                      <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z"
                          fill="#FFA645"
                        />
                      </svg>
                    </span>
                    <span class="hi">
                      <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z"
                          stroke="#FFA645"
                        />
                      </svg>
                    </span>

                    49 Reviews
                  </p>
                </div>
              </div>
            </div>
            <div
              class="oc ff nf vg im/2 pm om ao/3"
            >
              <div class="na bb">
                <div class="oa se we">
                  <img
                    src="src/assets/ecom-images/products/products-grids-05/image-05.jpg"
                    alt="product"
                    class="oc"
                  />
                </div>
                <div>
                  <span
                    class="wa qb ui bj gj am ym 2xl:ud-text-xl"
                  >
                    $25.55
                  </span>

                  <h3>
                    <a
                      href="product-details.html"
                      class="wa qb vi bj gj ik bm ym 2xl:ud-text-2xl"
                    >
                      Rubik's Cube
                    </a>
                  </h3>
                  <p
                    class="sb je ui dj hj"
                  >
                    <span class="gi">
                      <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z"
                          fill="#FFA645"
                        />
                      </svg>
                    </span>
                    <span class="gi">
                      <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z"
                          fill="#FFA645"
                        />
                      </svg>
                    </span>
                    <span class="gi">
                      <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z"
                          fill="#FFA645"
                        />
                      </svg>
                    </span>
                    <span class="gi">
                      <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z"
                          fill="#FFA645"
                        />
                      </svg>
                    </span>
                    <span class="hi">
                      <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z"
                          fill="#FFA645"
                        />
                      </svg>
                    </span>

                    35 Reviews
                  </p>
                </div>
              </div>
            </div>
            <div
              class="oc nf vg im/2 ao/3"
            >
              <div class="na bb">
                <div class="oa se we">
                  <img
                    src="src/assets/ecom-images/products/products-grids-05/image-06.jpg"
                    alt="product"
                    class="oc"
                  />
                </div>
                <div>
                  <span
                    class="wa qb ui bj gj am ym 2xl:ud-text-xl"
                  >
                    $85.55
                  </span>

                  <h3>
                    <a
                      href="product-details.html"
                      class="wa qb vi bj gj ik bm ym 2xl:ud-text-2xl"
                    >
                      Table Showpiece
                    </a>
                  </h3>
                  <p
                    class="sb je ui dj hj"
                  >
                    <span class="gi">
                      <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z"
                          fill="#FFA645"
                        />
                      </svg>
                    </span>
                    <span class="gi">
                      <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z"
                          fill="#FFA645"
                        />
                      </svg>
                    </span>
                    <span class="gi">
                      <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z"
                          fill="#FFA645"
                        />
                      </svg>
                    </span>
                    <span class="gi">
                      <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z"
                          fill="#FFA645"
                        />
                      </svg>
                    </span>
                    <span class="hi">
                      <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.925 5.975L10.4 5.275L8.34996 0.975C8.19996 0.675 7.79996 0.675 7.64996 0.975L5.59996 5.3L1.09996 5.975C0.77496 6.025 0.64996 6.45 0.89996 6.675L4.17496 10.05L3.39996 14.775C3.34996 15.1 3.67496 15.375 3.97496 15.175L8.04996 12.95L12.1 15.175C12.375 15.325 12.725 15.075 12.65 14.775L11.875 10.05L15.15 6.675C15.35 6.45 15.25 6.025 14.925 5.975Z"
                          stroke="#FFA645"
                        />
                      </svg>
                    </span>

                    97 Reviews
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Product Grids End -->

    <!-- ====== Testimonials Section Start -->
    <section class="ii dp">
      <div class="a da">
        <div class="ea sb he le">
          <div class="oc vg">
            <div
              class="da cb qd si"
            >
              <span
                class="wa qb wi bj ij"
              >
                Testimonials
              </span>
              <h2
                class="xa _i cj lj _l xm"
              >
                What our Clients Says
              </h2>
              <p class="ui hj">
                There are many variations of passages of Lorem Ipsum available
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>

        <div
          x-data="
            {
              slides: ['1','2','3', '4'],
              activeSlide: 1,
              activeButton: 'vc yf',
              button: 'wc _f'
            }
          "
        >
          <div class="e sb le">
            <div class="e oc fi">
              <div
                class="snap da sb ac oc rd ie se bk zk tl lm go fq 2xl:ud-max-w-[1320px]"
                x-ref="carousel"
              >
                <div
                  class="da wb gd vg yk ql km fo eq 2xl:ud-min-w-[430px]"
                >
                  <div
                    class="na wf rg wj vo so gq"
                  >
                    <div class="oa sb je">
                      <span class="db">
                        <svg
                          width="18"
                          height="16"
                          viewBox="0 0 18 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                            fill="#FBB040"
                          />
                        </svg>
                      </span>
                      <span class="db">
                        <svg
                          width="18"
                          height="16"
                          viewBox="0 0 18 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                            fill="#FBB040"
                          />
                        </svg>
                      </span>
                      <span class="db">
                        <svg
                          width="18"
                          height="16"
                          viewBox="0 0 18 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                            fill="#FBB040"
                          />
                        </svg>
                      </span>
                      <span class="db">
                        <svg
                          width="18"
                          height="16"
                          viewBox="0 0 18 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                            fill="#FBB040"
                          />
                        </svg>
                      </span>
                      <span class="db">
                        <svg
                          width="18"
                          height="16"
                          viewBox="0 0 18 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                            fill="#FBB040"
                          />
                        </svg>
                      </span>
                    </div>

                    <p
                      class="oa ui fj hj"
                    >
                      “Our members are so impressed. It's intuitive. It's clean.
                      It's distraction free. If you're building a community.
                    </p>
                    <div class="sb je">
                      <div
                        class="ta ec oc sd"
                      >
                        <img
                          src="src/assets/images/testimonials/testimonial-04/image-01.png"
                          alt="image"
                          class="oc"
                        />
                      </div>
                      <div class="oc">
                        <h5
                          class="sa xi bj lj"
                        >
                          Sabo Masties
                        </h5>
                        <p class="yi hj">
                          Founder @ Rolex
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="da wb gd vg yk ql km fo eq 2xl:ud-min-w-[430px]"
                >
                  <div
                    class="na wf rg wj vo so gq"
                  >
                    <div class="oa sb je">
                      <span class="db">
                        <svg
                          width="18"
                          height="16"
                          viewBox="0 0 18 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                            fill="#FBB040"
                          />
                        </svg>
                      </span>
                      <span class="db">
                        <svg
                          width="18"
                          height="16"
                          viewBox="0 0 18 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                            fill="#FBB040"
                          />
                        </svg>
                      </span>
                      <span class="db">
                        <svg
                          width="18"
                          height="16"
                          viewBox="0 0 18 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                            fill="#FBB040"
                          />
                        </svg>
                      </span>
                      <span class="db">
                        <svg
                          width="18"
                          height="16"
                          viewBox="0 0 18 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                            fill="#FBB040"
                          />
                        </svg>
                      </span>
                      <span class="db">
                        <svg
                          width="18"
                          height="16"
                          viewBox="0 0 18 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                            fill="#FBB040"
                          />
                        </svg>
                      </span>
                    </div>

                    <p
                      class="oa ui fj hj"
                    >
                      “Our members are so impressed. It's intuitive. It's clean.
                      It's distraction free. If you're building a community.
                    </p>
                    <div class="sb je">
                      <div
                        class="ta ec oc sd"
                      >
                        <img
                          src="src/assets/images/testimonials/testimonial-04/image-02.png"
                          alt="image"
                          class="oc"
                        />
                      </div>
                      <div class="oc">
                        <h5
                          class="sa xi bj lj"
                        >
                          Mosharrof Chy
                        </h5>
                        <p class="yi hj">
                          Founder @ UIdeck
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="da wb gd vg yk ql km fo eq 2xl:ud-min-w-[430px]"
                >
                  <div
                    class="na wf rg wj vo so gq"
                  >
                    <div class="oa sb je">
                      <span class="db">
                        <svg
                          width="18"
                          height="16"
                          viewBox="0 0 18 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                            fill="#FBB040"
                          />
                        </svg>
                      </span>
                      <span class="db">
                        <svg
                          width="18"
                          height="16"
                          viewBox="0 0 18 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                            fill="#FBB040"
                          />
                        </svg>
                      </span>
                      <span class="db">
                        <svg
                          width="18"
                          height="16"
                          viewBox="0 0 18 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                            fill="#FBB040"
                          />
                        </svg>
                      </span>
                      <span class="db">
                        <svg
                          width="18"
                          height="16"
                          viewBox="0 0 18 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                            fill="#FBB040"
                          />
                        </svg>
                      </span>
                      <span class="db">
                        <svg
                          width="18"
                          height="16"
                          viewBox="0 0 18 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                            fill="#FBB040"
                          />
                        </svg>
                      </span>
                    </div>

                    <p
                      class="oa ui fj hj"
                    >
                      “Our members are so impressed. It's intuitive. It's clean.
                      It's distraction free. If you're building a community.
                    </p>
                    <div class="sb je">
                      <div
                        class="ta ec oc sd"
                      >
                        <img
                          src="src/assets/images/testimonials/testimonial-04/image-03.png"
                          alt="image"
                          class="oc"
                        />
                      </div>
                      <div class="oc">
                        <h5
                          class="sa xi bj lj"
                        >
                          Mark Oreo
                        </h5>
                        <p class="yi hj">
                          Founder @ Heo
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="da wb gd vg yk ql km fo eq 2xl:ud-min-w-[430px]"
                >
                  <div
                    class="na wf rg wj vo so gq"
                  >
                    <div class="oa sb je">
                      <span class="db">
                        <svg
                          width="18"
                          height="16"
                          viewBox="0 0 18 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                            fill="#FBB040"
                          />
                        </svg>
                      </span>
                      <span class="db">
                        <svg
                          width="18"
                          height="16"
                          viewBox="0 0 18 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                            fill="#FBB040"
                          />
                        </svg>
                      </span>
                      <span class="db">
                        <svg
                          width="18"
                          height="16"
                          viewBox="0 0 18 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                            fill="#FBB040"
                          />
                        </svg>
                      </span>
                      <span class="db">
                        <svg
                          width="18"
                          height="16"
                          viewBox="0 0 18 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                            fill="#FBB040"
                          />
                        </svg>
                      </span>
                      <span class="db">
                        <svg
                          width="18"
                          height="16"
                          viewBox="0 0 18 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M9.09815 0.360596L11.1054 6.06493H17.601L12.3459 9.5904L14.3532 15.2947L9.09815 11.7693L3.84309 15.2947L5.85035 9.5904L0.595291 6.06493H7.0909L9.09815 0.360596Z"
                            fill="#FBB040"
                          />
                        </svg>
                      </span>
                    </div>

                    <p
                      class="oa ui fj hj"
                    >
                      “Our members are so impressed. It's intuitive. It's clean.
                      It's distraction free. If you're building a community.
                    </p>
                    <div class="sb je">
                      <div
                        class="ta ec oc sd"
                      >
                        <img
                          src="src/assets/images/testimonials/testimonial-04/image-01.png"
                          alt="image"
                          class="oc"
                        />
                      </div>
                      <div class="oc">
                        <h5
                          class="sa xi bj lj"
                        >
                          Sabo Masties
                        </h5>
                        <p class="yi hj">
                          Founder @ Rolex
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="d m i n sb je le"
              >
                <button
                  class="ha sb bc tc je le wf ij xj bk fk jk"
                  @click="$refs.carousel.scrollLeft = $refs.carousel.scrollLeft - ($refs.carousel.scrollWidth / slides.length); activeSlide -= 1"
                >
                  <svg
                    width="15"
                    height="13"
                    viewBox="0 0 15 13"
                    class="kg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M5.24264 11.8033L0.46967 7.03037C0.176777 6.73748 0.176777 6.2626 0.46967 5.96971L5.24264 1.19674C5.53553 0.903845 6.01041 0.903845 6.3033 1.19674C6.59619 1.48963 6.59619 1.96451 6.3033 2.2574L2.81066 5.75004H14C14.4142 5.75004 14.75 6.08583 14.75 6.50004C14.75 6.91425 14.4142 7.25004 14 7.25004H2.81066L6.3033 10.7427C6.59619 11.0356 6.59619 11.5104 6.3033 11.8033C6.01041 12.0962 5.53553 12.0962 5.24264 11.8033Z"
                    />
                  </svg>
                </button>
                <button
                  class="ha sb bc tc je le wf ij xj bk fk jk"
                  @click="$refs.carousel.scrollLeft = $refs.carousel.scrollLeft + ($refs.carousel.scrollWidth / slides.length); activeSlide += 1"
                >
                  <svg
                    width="15"
                    height="13"
                    viewBox="0 0 15 13"
                    class="kg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M9.75736 11.8033L14.5303 7.03037C14.8232 6.73748 14.8232 6.2626 14.5303 5.96971L9.75736 1.19674C9.46447 0.903845 8.98959 0.903845 8.6967 1.19674C8.40381 1.48963 8.40381 1.96451 8.6967 2.2574L12.1893 5.75004H1C0.585786 5.75004 0.25 6.08583 0.25 6.50004C0.25 6.91425 0.585786 7.25004 1 7.25004H12.1893L8.6967 10.7427C8.40381 11.0356 8.40381 11.5104 8.6967 11.8033C8.98959 12.0962 9.46447 12.0962 9.75736 11.8033Z"
                    />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Testimonials Section End -->

    <!-- ====== Blog Section Start -->
    <section class="ii dp">
      <div class="a da">
        <div class="ea sb he le">
          <div class="e oc vg">
            <div
              class="da cb qd si ln"
            >
              <h2
                class="xa _i cj lj _l xm"
              >
                From Our Blog
              </h2>
              <p class="ui hj">
                There are many variations of passages of Lorem Ipsum available
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>

        <div class="ea sb he">
          <div class="oc vg im/2 ao/3">
            <div class="da na td">
              <div class="ma se xe">
                <img
                  src="src/assets/images/blogs/blog-04/image-01.jpg"
                  alt="image"
                  class="oc"
                />
              </div>
              <div>
                <span
                  class="ra rb ui bj ij"
                >
                  Management
                </span>
                <h3>
                  <a
                    href="javascript:void(0)"
                    class="oa rb vi bj lj ik bm mp pq"
                  >
                    Meet AutoManage, the best AI management tools
                  </a>
                </h3>
                <div class="sb je">
                  <p
                    class="eb sb je xi dj hj"
                  >
                    <span class="ya">
                      <svg
                        width="15"
                        height="15"
                        viewBox="0 0 15 15"
                        class="kg"
                      >
                        <path
                          d="M3.8958 8.67529H3.10715C2.96376 8.67529 2.86816 8.77089 2.86816 8.91428V9.67904C2.86816 9.82243 2.96376 9.91802 3.10715 9.91802H3.8958C4.03919 9.91802 4.13479 9.82243 4.13479 9.67904V8.91428C4.13479 8.77089 4.03919 8.67529 3.8958 8.67529Z"
                        />
                        <path
                          d="M6.429 8.67529H5.64035C5.49696 8.67529 5.40137 8.77089 5.40137 8.91428V9.67904C5.40137 9.82243 5.49696 9.91802 5.64035 9.91802H6.429C6.57239 9.91802 6.66799 9.82243 6.66799 9.67904V8.91428C6.66799 8.77089 6.5485 8.67529 6.429 8.67529Z"
                        />
                        <path
                          d="M8.93779 8.67529H8.14914C8.00575 8.67529 7.91016 8.77089 7.91016 8.91428V9.67904C7.91016 9.82243 8.00575 9.91802 8.14914 9.91802H8.93779C9.08118 9.91802 9.17678 9.82243 9.17678 9.67904V8.91428C9.17678 8.77089 9.08118 8.67529 8.93779 8.67529Z"
                        />
                        <path
                          d="M11.472 8.67529H10.6833C10.5399 8.67529 10.4443 8.77089 10.4443 8.91428V9.67904C10.4443 9.82243 10.5399 9.91802 10.6833 9.91802H11.472C11.6154 9.91802 11.711 9.82243 11.711 9.67904V8.91428C11.711 8.77089 11.5915 8.67529 11.472 8.67529Z"
                        />
                        <path
                          d="M3.8958 11.1606H3.10715C2.96376 11.1606 2.86816 11.2562 2.86816 11.3996V12.1644C2.86816 12.3078 2.96376 12.4034 3.10715 12.4034H3.8958C4.03919 12.4034 4.13479 12.3078 4.13479 12.1644V11.3996C4.13479 11.2562 4.03919 11.1606 3.8958 11.1606Z"
                        />
                        <path
                          d="M6.429 11.1606H5.64035C5.49696 11.1606 5.40137 11.2562 5.40137 11.3996V12.1644C5.40137 12.3078 5.49696 12.4034 5.64035 12.4034H6.429C6.57239 12.4034 6.66799 12.3078 6.66799 12.1644V11.3996C6.66799 11.2562 6.5485 11.1606 6.429 11.1606Z"
                        />
                        <path
                          d="M8.93779 11.1606H8.14914C8.00575 11.1606 7.91016 11.2562 7.91016 11.3996V12.1644C7.91016 12.3078 8.00575 12.4034 8.14914 12.4034H8.93779C9.08118 12.4034 9.17678 12.3078 9.17678 12.1644V11.3996C9.17678 11.2562 9.08118 11.1606 8.93779 11.1606Z"
                        />
                        <path
                          d="M11.472 11.1606H10.6833C10.5399 11.1606 10.4443 11.2562 10.4443 11.3996V12.1644C10.4443 12.3078 10.5399 12.4034 10.6833 12.4034H11.472C11.6154 12.4034 11.711 12.3078 11.711 12.1644V11.3996C11.711 11.2562 11.5915 11.1606 11.472 11.1606Z"
                        />
                        <path
                          d="M13.2637 3.3697H7.64754V2.58105C8.19721 2.43765 8.62738 1.91189 8.62738 1.31442C8.62738 0.597464 8.02992 0 7.28906 0C6.54821 0 5.95074 0.597464 5.95074 1.31442C5.95074 1.91189 6.35702 2.41376 6.93058 2.58105V3.3697H1.31442C0.597464 3.3697 0 3.96716 0 4.68412V13.2637C0 13.9807 0.597464 14.5781 1.31442 14.5781H13.2637C13.9807 14.5781 14.5781 13.9807 14.5781 13.2637V4.68412C14.5781 3.96716 13.9807 3.3697 13.2637 3.3697ZM6.6677 1.31442C6.6677 0.979841 6.93058 0.716957 7.28906 0.716957C7.62364 0.716957 7.91042 0.979841 7.91042 1.31442C7.91042 1.649 7.64754 1.91189 7.28906 1.91189C6.95448 1.91189 6.6677 1.6251 6.6677 1.31442ZM1.31442 4.08665H13.2637C13.5983 4.08665 13.8612 4.34954 13.8612 4.68412V6.45261H0.716957V4.68412C0.716957 4.34954 0.979841 4.08665 1.31442 4.08665ZM13.2637 13.8612H1.31442C0.979841 13.8612 0.716957 13.5983 0.716957 13.2637V7.16957H13.8612V13.2637C13.8612 13.5983 13.5983 13.8612 13.2637 13.8612Z"
                        />
                      </svg>
                    </span>
                    26 Feb 2023
                  </p>

                  <p
                    class="sb je xi dj hj"
                  >
                    <span class="ya">
                      <svg
                        width="18"
                        height="13"
                        viewBox="0 0 18 13"
                        class="kg"
                      >
                        <path
                          d="M15.9754 0H2.02539C1.09727 0 0.337891 0.759375 0.337891 1.6875V10.6875C0.337891 11.3062 0.647266 11.8406 1.18164 12.15C1.43477 12.2906 1.74414 12.375 2.02539 12.375C2.30664 12.375 2.58789 12.2906 2.86914 12.15L5.34414 10.7156C5.45664 10.6594 5.56914 10.6312 5.68164 10.6312H15.9473C16.8754 10.6312 17.6348 9.87187 17.6348 8.94375V1.6875C17.6629 0.759375 16.9035 0 15.9754 0ZM16.6785 8.94375C16.6785 9.3375 16.3691 9.64687 15.9754 9.64687H5.70977C5.42852 9.64687 5.11914 9.73125 4.86602 9.87187L2.39102 11.3063C2.16602 11.4187 1.91289 11.4187 1.68789 11.3063C1.46289 11.1938 1.35039 10.9688 1.35039 10.7156V1.6875C1.35039 1.29375 1.65977 0.984375 2.05352 0.984375H16.0035C16.3973 0.984375 16.7066 1.29375 16.7066 1.6875V8.94375H16.6785Z"
                        />
                        <path
                          d="M12.5721 3.375H5.03457C4.75332 3.375 4.52832 3.6 4.52832 3.88125C4.52832 4.1625 4.75332 4.3875 5.03457 4.3875H12.6002C12.8814 4.3875 13.1064 4.1625 13.1064 3.88125C13.1064 3.6 12.8533 3.375 12.5721 3.375Z"
                        />
                        <path
                          d="M11.3908 6.55322H5.03457C4.75332 6.55322 4.52832 6.77822 4.52832 7.05947C4.52832 7.34072 4.75332 7.56572 5.03457 7.56572H11.4189C11.7002 7.56572 11.9252 7.34072 11.9252 7.05947C11.9252 6.77822 11.6721 6.55322 11.3908 6.55322Z"
                        />
                      </svg>
                    </span>
                    05
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="oc vg im/2 ao/3">
            <div class="da na td">
              <div class="ma se xe">
                <img
                  src="src/assets/images/blogs/blog-04/image-02.jpg"
                  alt="image"
                  class="oc"
                />
              </div>
              <div>
                <span
                  class="ra rb ui bj ij"
                >
                  Graphic Design
                </span>
                <h3>
                  <a
                    href="javascript:void(0)"
                    class="oa rb vi bj lj ik bm mp pq"
                  >
                    50+ best way to learn graphics design in 30 days
                  </a>
                </h3>
                <div class="sb je">
                  <p
                    class="eb sb je xi dj hj"
                  >
                    <span class="ya">
                      <svg
                        width="15"
                        height="15"
                        viewBox="0 0 15 15"
                        class="kg"
                      >
                        <path
                          d="M3.8958 8.67529H3.10715C2.96376 8.67529 2.86816 8.77089 2.86816 8.91428V9.67904C2.86816 9.82243 2.96376 9.91802 3.10715 9.91802H3.8958C4.03919 9.91802 4.13479 9.82243 4.13479 9.67904V8.91428C4.13479 8.77089 4.03919 8.67529 3.8958 8.67529Z"
                        />
                        <path
                          d="M6.429 8.67529H5.64035C5.49696 8.67529 5.40137 8.77089 5.40137 8.91428V9.67904C5.40137 9.82243 5.49696 9.91802 5.64035 9.91802H6.429C6.57239 9.91802 6.66799 9.82243 6.66799 9.67904V8.91428C6.66799 8.77089 6.5485 8.67529 6.429 8.67529Z"
                        />
                        <path
                          d="M8.93779 8.67529H8.14914C8.00575 8.67529 7.91016 8.77089 7.91016 8.91428V9.67904C7.91016 9.82243 8.00575 9.91802 8.14914 9.91802H8.93779C9.08118 9.91802 9.17678 9.82243 9.17678 9.67904V8.91428C9.17678 8.77089 9.08118 8.67529 8.93779 8.67529Z"
                        />
                        <path
                          d="M11.472 8.67529H10.6833C10.5399 8.67529 10.4443 8.77089 10.4443 8.91428V9.67904C10.4443 9.82243 10.5399 9.91802 10.6833 9.91802H11.472C11.6154 9.91802 11.711 9.82243 11.711 9.67904V8.91428C11.711 8.77089 11.5915 8.67529 11.472 8.67529Z"
                        />
                        <path
                          d="M3.8958 11.1606H3.10715C2.96376 11.1606 2.86816 11.2562 2.86816 11.3996V12.1644C2.86816 12.3078 2.96376 12.4034 3.10715 12.4034H3.8958C4.03919 12.4034 4.13479 12.3078 4.13479 12.1644V11.3996C4.13479 11.2562 4.03919 11.1606 3.8958 11.1606Z"
                        />
                        <path
                          d="M6.429 11.1606H5.64035C5.49696 11.1606 5.40137 11.2562 5.40137 11.3996V12.1644C5.40137 12.3078 5.49696 12.4034 5.64035 12.4034H6.429C6.57239 12.4034 6.66799 12.3078 6.66799 12.1644V11.3996C6.66799 11.2562 6.5485 11.1606 6.429 11.1606Z"
                        />
                        <path
                          d="M8.93779 11.1606H8.14914C8.00575 11.1606 7.91016 11.2562 7.91016 11.3996V12.1644C7.91016 12.3078 8.00575 12.4034 8.14914 12.4034H8.93779C9.08118 12.4034 9.17678 12.3078 9.17678 12.1644V11.3996C9.17678 11.2562 9.08118 11.1606 8.93779 11.1606Z"
                        />
                        <path
                          d="M11.472 11.1606H10.6833C10.5399 11.1606 10.4443 11.2562 10.4443 11.3996V12.1644C10.4443 12.3078 10.5399 12.4034 10.6833 12.4034H11.472C11.6154 12.4034 11.711 12.3078 11.711 12.1644V11.3996C11.711 11.2562 11.5915 11.1606 11.472 11.1606Z"
                        />
                        <path
                          d="M13.2637 3.3697H7.64754V2.58105C8.19721 2.43765 8.62738 1.91189 8.62738 1.31442C8.62738 0.597464 8.02992 0 7.28906 0C6.54821 0 5.95074 0.597464 5.95074 1.31442C5.95074 1.91189 6.35702 2.41376 6.93058 2.58105V3.3697H1.31442C0.597464 3.3697 0 3.96716 0 4.68412V13.2637C0 13.9807 0.597464 14.5781 1.31442 14.5781H13.2637C13.9807 14.5781 14.5781 13.9807 14.5781 13.2637V4.68412C14.5781 3.96716 13.9807 3.3697 13.2637 3.3697ZM6.6677 1.31442C6.6677 0.979841 6.93058 0.716957 7.28906 0.716957C7.62364 0.716957 7.91042 0.979841 7.91042 1.31442C7.91042 1.649 7.64754 1.91189 7.28906 1.91189C6.95448 1.91189 6.6677 1.6251 6.6677 1.31442ZM1.31442 4.08665H13.2637C13.5983 4.08665 13.8612 4.34954 13.8612 4.68412V6.45261H0.716957V4.68412C0.716957 4.34954 0.979841 4.08665 1.31442 4.08665ZM13.2637 13.8612H1.31442C0.979841 13.8612 0.716957 13.5983 0.716957 13.2637V7.16957H13.8612V13.2637C13.8612 13.5983 13.5983 13.8612 13.2637 13.8612Z"
                        />
                      </svg>
                    </span>
                    01 Apr 2023
                  </p>

                  <p
                    class="sb je xi dj hj"
                  >
                    <span class="ya">
                      <svg
                        width="18"
                        height="13"
                        viewBox="0 0 18 13"
                        class="kg"
                      >
                        <path
                          d="M15.9754 0H2.02539C1.09727 0 0.337891 0.759375 0.337891 1.6875V10.6875C0.337891 11.3062 0.647266 11.8406 1.18164 12.15C1.43477 12.2906 1.74414 12.375 2.02539 12.375C2.30664 12.375 2.58789 12.2906 2.86914 12.15L5.34414 10.7156C5.45664 10.6594 5.56914 10.6312 5.68164 10.6312H15.9473C16.8754 10.6312 17.6348 9.87187 17.6348 8.94375V1.6875C17.6629 0.759375 16.9035 0 15.9754 0ZM16.6785 8.94375C16.6785 9.3375 16.3691 9.64687 15.9754 9.64687H5.70977C5.42852 9.64687 5.11914 9.73125 4.86602 9.87187L2.39102 11.3063C2.16602 11.4187 1.91289 11.4187 1.68789 11.3063C1.46289 11.1938 1.35039 10.9688 1.35039 10.7156V1.6875C1.35039 1.29375 1.65977 0.984375 2.05352 0.984375H16.0035C16.3973 0.984375 16.7066 1.29375 16.7066 1.6875V8.94375H16.6785Z"
                        />
                        <path
                          d="M12.5721 3.375H5.03457C4.75332 3.375 4.52832 3.6 4.52832 3.88125C4.52832 4.1625 4.75332 4.3875 5.03457 4.3875H12.6002C12.8814 4.3875 13.1064 4.1625 13.1064 3.88125C13.1064 3.6 12.8533 3.375 12.5721 3.375Z"
                        />
                        <path
                          d="M11.3908 6.55322H5.03457C4.75332 6.55322 4.52832 6.77822 4.52832 7.05947C4.52832 7.34072 4.75332 7.56572 5.03457 7.56572H11.4189C11.7002 7.56572 11.9252 7.34072 11.9252 7.05947C11.9252 6.77822 11.6721 6.55322 11.3908 6.55322Z"
                        />
                      </svg>
                    </span>
                    10
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="oc vg im/2 ao/3">
            <div
              class="e da na td se xe yf ih jh si ro"
            >
              <h3 class="wa zi bj jj">
                Join our newsletter!
              </h3>
              <p class="ma ui jj">
                Enter your email to receive our latest newsletter.
              </p>
              <form>
                <input
                  type="email"
                  placeholder="Your email address"
                  class="xa oc xe af pf wf hg pg si xi dj jj sj tj _j mk ok"
                />
                <input
                  type="submit"
                  value="Subscribe Now"
                  class="qa oc ce xe ag pg si xi dj jj ak hk"
                />
              </form>
              <p class="xi dj jj">
                Don't worry, we don't spam
              </p>

              <div>
                <span class="d h i">
                  <svg
                    width="46"
                    height="46"
                    viewBox="0 0 46 46"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      cx="1.39737"
                      cy="44.6026"
                      r="1.39737"
                      transform="rotate(-90 1.39737 44.6026)"
                      fill="white"
                      fill-opacity="0.44"
                    />
                    <circle
                      cx="1.39737"
                      cy="7.9913"
                      r="1.39737"
                      transform="rotate(-90 1.39737 7.9913)"
                      fill="white"
                      fill-opacity="0.44"
                    />
                    <circle
                      cx="13.6943"
                      cy="44.6026"
                      r="1.39737"
                      transform="rotate(-90 13.6943 44.6026)"
                      fill="white"
                      fill-opacity="0.44"
                    />
                    <circle
                      cx="13.6943"
                      cy="7.9913"
                      r="1.39737"
                      transform="rotate(-90 13.6943 7.9913)"
                      fill="white"
                      fill-opacity="0.44"
                    />
                    <circle
                      cx="25.9911"
                      cy="44.6026"
                      r="1.39737"
                      transform="rotate(-90 25.9911 44.6026)"
                      fill="white"
                      fill-opacity="0.44"
                    />
                    <circle
                      cx="25.9911"
                      cy="7.9913"
                      r="1.39737"
                      transform="rotate(-90 25.9911 7.9913)"
                      fill="white"
                      fill-opacity="0.44"
                    />
                    <circle
                      cx="38.288"
                      cy="44.6026"
                      r="1.39737"
                      transform="rotate(-90 38.288 44.6026)"
                      fill="white"
                      fill-opacity="0.44"
                    />
                    <circle
                      cx="38.288"
                      cy="7.9913"
                      r="1.39737"
                      transform="rotate(-90 38.288 7.9913)"
                      fill="white"
                      fill-opacity="0.44"
                    />
                    <circle
                      cx="1.39737"
                      cy="32.3058"
                      r="1.39737"
                      transform="rotate(-90 1.39737 32.3058)"
                      fill="white"
                      fill-opacity="0.44"
                    />
                    <circle
                      cx="13.6943"
                      cy="32.3058"
                      r="1.39737"
                      transform="rotate(-90 13.6943 32.3058)"
                      fill="white"
                      fill-opacity="0.44"
                    />
                    <circle
                      cx="25.9911"
                      cy="32.3058"
                      r="1.39737"
                      transform="rotate(-90 25.9911 32.3058)"
                      fill="white"
                      fill-opacity="0.44"
                    />
                    <circle
                      cx="38.288"
                      cy="32.3058"
                      r="1.39737"
                      transform="rotate(-90 38.288 32.3058)"
                      fill="white"
                      fill-opacity="0.44"
                    />
                    <circle
                      cx="1.39737"
                      cy="20.0086"
                      r="1.39737"
                      transform="rotate(-90 1.39737 20.0086)"
                      fill="white"
                      fill-opacity="0.44"
                    />
                    <circle
                      cx="13.6943"
                      cy="20.0086"
                      r="1.39737"
                      transform="rotate(-90 13.6943 20.0086)"
                      fill="white"
                      fill-opacity="0.44"
                    />
                    <circle
                      cx="25.9911"
                      cy="20.0086"
                      r="1.39737"
                      transform="rotate(-90 25.9911 20.0086)"
                      fill="white"
                      fill-opacity="0.44"
                    />
                    <circle
                      cx="38.288"
                      cy="20.0086"
                      r="1.39737"
                      transform="rotate(-90 38.288 20.0086)"
                      fill="white"
                      fill-opacity="0.44"
                    />
                  </svg>
                </span>
                <span class="d n m">
                  <svg
                    width="46"
                    height="46"
                    viewBox="0 0 46 46"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      cx="1.39737"
                      cy="44.6026"
                      r="1.39737"
                      transform="rotate(-90 1.39737 44.6026)"
                      fill="white"
                      fill-opacity="0.44"
                    />
                    <circle
                      cx="1.39737"
                      cy="7.9913"
                      r="1.39737"
                      transform="rotate(-90 1.39737 7.9913)"
                      fill="white"
                      fill-opacity="0.44"
                    />
                    <circle
                      cx="13.6943"
                      cy="44.6026"
                      r="1.39737"
                      transform="rotate(-90 13.6943 44.6026)"
                      fill="white"
                      fill-opacity="0.44"
                    />
                    <circle
                      cx="13.6943"
                      cy="7.9913"
                      r="1.39737"
                      transform="rotate(-90 13.6943 7.9913)"
                      fill="white"
                      fill-opacity="0.44"
                    />
                    <circle
                      cx="25.9911"
                      cy="44.6026"
                      r="1.39737"
                      transform="rotate(-90 25.9911 44.6026)"
                      fill="white"
                      fill-opacity="0.44"
                    />
                    <circle
                      cx="25.9911"
                      cy="7.9913"
                      r="1.39737"
                      transform="rotate(-90 25.9911 7.9913)"
                      fill="white"
                      fill-opacity="0.44"
                    />
                    <circle
                      cx="38.288"
                      cy="44.6026"
                      r="1.39737"
                      transform="rotate(-90 38.288 44.6026)"
                      fill="white"
                      fill-opacity="0.44"
                    />
                    <circle
                      cx="38.288"
                      cy="7.9913"
                      r="1.39737"
                      transform="rotate(-90 38.288 7.9913)"
                      fill="white"
                      fill-opacity="0.44"
                    />
                    <circle
                      cx="1.39737"
                      cy="32.3058"
                      r="1.39737"
                      transform="rotate(-90 1.39737 32.3058)"
                      fill="white"
                      fill-opacity="0.44"
                    />
                    <circle
                      cx="13.6943"
                      cy="32.3058"
                      r="1.39737"
                      transform="rotate(-90 13.6943 32.3058)"
                      fill="white"
                      fill-opacity="0.44"
                    />
                    <circle
                      cx="25.9911"
                      cy="32.3058"
                      r="1.39737"
                      transform="rotate(-90 25.9911 32.3058)"
                      fill="white"
                      fill-opacity="0.44"
                    />
                    <circle
                      cx="38.288"
                      cy="32.3058"
                      r="1.39737"
                      transform="rotate(-90 38.288 32.3058)"
                      fill="white"
                      fill-opacity="0.44"
                    />
                    <circle
                      cx="1.39737"
                      cy="20.0086"
                      r="1.39737"
                      transform="rotate(-90 1.39737 20.0086)"
                      fill="white"
                      fill-opacity="0.44"
                    />
                    <circle
                      cx="13.6943"
                      cy="20.0086"
                      r="1.39737"
                      transform="rotate(-90 13.6943 20.0086)"
                      fill="white"
                      fill-opacity="0.44"
                    />
                    <circle
                      cx="25.9911"
                      cy="20.0086"
                      r="1.39737"
                      transform="rotate(-90 25.9911 20.0086)"
                      fill="white"
                      fill-opacity="0.44"
                    />
                    <circle
                      cx="38.288"
                      cy="20.0086"
                      r="1.39737"
                      transform="rotate(-90 38.288 20.0086)"
                      fill="white"
                      fill-opacity="0.44"
                    />
                  </svg>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Blog Section End -->

  @endsection

    