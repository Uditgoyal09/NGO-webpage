<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hope Foundation - Make a Difference Today</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: { primary: "#4F46E5", secondary: "#10B981" },
            borderRadius: {
              none: "0px",
              sm: "4px",
              DEFAULT: "4px",
              md: "12px",
              lg: "16px",
              xl: "20px",
              "2xl": "24px",
              "3xl": "32px",
              full: "9999px",
              button: "4px",
            },
          },
        },
      };
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <style>
      :where([class^="ri-"])::before { content: "\f3c2"; }
      .qr-code-container {
      transition: all 0.3s ease;
      }
      .testimonial-slider {
      transition: transform 0.5s ease;
      }
      /* Button styles */
      button {
      position: relative;
      overflow: hidden;
      cursor: pointer;
      transition: all 0.3s ease;
      }
      button:active {
      transform: scale(0.95);
      }
      .ripple {
      position: absolute;
      background: rgba(255, 255, 255, 0.3);
      border-radius: 50%;
      transform: scale(0);
      animation: ripple 0.6s linear;
      pointer-events: none;
      }
      @keyframes ripple {
      to {
      transform: scale(4);
      opacity: 0;
      }
      }
      /* Active state */
      button.active {
      opacity: 0.8;
      }
      /* Hover state */
      button:hover {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }
    </style>
  </head>
  <body class="bg-white min-h-screen">
    <header class="fixed w-full bg-white shadow-sm z-50">
      <nav class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
          <div class="flex items-center">
            <a href="#" class="text-2xl font-['Pacifico'] text-primary"><img src="Screenshot 2025-03-07 205807.png" alt=""></a>
            <div class="hidden md:flex items-center ml-16 space-x-8">
              <a href="#" class="text-gray-700 hover:text-primary">Home</a>
              <a href="#about" class="text-gray-700 hover:text-primary"
                >About Us</a
              >
              <a href="#donate" class="text-gray-700 hover:text-primary"
                >Donate</a
              >
              <a href="#photos" class="text-gray-700 hover:text-primary"
                >Gallery</a
              >
              <a href="#impact" class="text-gray-700 hover:text-primary"
                >Impact Stories</a
              >
              <a href="#contact" class="text-gray-700 hover:text-primary"
                >Contact</a
              >
            </div>
          </div>
          <div class="flex items-center space-x-4">
            <div class="hidden md:flex items-center space-x-4">
              <a
                href="https://www.facebook.com/helpinghandsngo/"
                class="w-8 h-8 flex items-center justify-center text-gray-600 hover:text-primary"
              >
                <i class="ri-facebook-fill ri-lg"></i>
              </a>
              <a
                href="#"
                class="w-8 h-8 flex items-center justify-center text-gray-600 hover:text-primary"
              >
                <i class="ri-twitter-fill ri-lg"></i>
              </a>
              <a
                href="#"
                class="w-8 h-8 flex items-center justify-center text-gray-600 hover:text-primary"
              >
                <i class="ri-instagram-fill ri-lg"></i>
              </a>
            </div>
            <button
              id="mobileMenuBtn"
              class="md:hidden w-8 h-8 flex items-center justify-center"
            >
              <i class="ri-menu-line ri-lg"></i>
            </button>
          </div>
        </div>
        <div id="mobileMenu" class="hidden md:hidden mt-4 pb-4">
          <a href="#" class="block py-2 text-gray-700 hover:text-primary"
            >Home</a
          >
          <a href="#about" class="block py-2 text-gray-700 hover:text-primary"
            >About Us</a
          >
          <a href="#donate" class="block py-2 text-gray-700 hover:text-primary"
            >Donate</a
          >
          <a href="#photos" class="block py-2 text-gray-700 hover:text-primary"
            >Gallery</a
          >
          <a href="#impact" class="block py-2 text-gray-700 hover:text-primary"
            >Impact Stories</a
          >
          <a href="#contact" class="block py-2 text-gray-700 hover:text-primary"
            >Contact</a
          >
          <div class="flex space-x-4 mt-4">
            <a
              href="https://www.facebook.com/helpinghandsngo/"
              class="w-8 h-8 flex items-center justify-center text-gray-600 hover:text-primary"
            >
              <i class="ri-facebook-fill ri-lg"></i>
            </a>
            <a
              href="#"
              class="w-8 h-8 flex items-center justify-center text-gray-600 hover:text-primary"
            >
              <i class="ri-twitter-fill ri-lg"></i>
            </a>
            <a
              href="#"
              class="w-8 h-8 flex items-center justify-center text-gray-600 hover:text-primary"
            >
              <i class="ri-instagram-fill ri-lg"></i>
            </a>
          </div>
        </div>
      </nav>
    </header>
    <main class="pt-16">
      <section
        class="relative h-[600px] bg-cover bg-center"
        style="background-image: url('https://public.readdy.ai/ai/img_res/d95e0028b8f19089ca674da5a819f762.jpg')"
      >
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="container mx-auto px-6 h-full flex items-center relative">
          <div class="max-w-2xl text-white">
            <h1 class="text-5xl font-bold mb-6">Make a Difference Today</h1>
            <p class="text-xl mb-8">
              Join us in creating positive change. Your support can transform
              lives and build stronger communities.
            </p>
            <a
              href="#donate"
              class="inline-block bg-primary text-white px-8 py-4 !rounded-button text-lg font-semibold hover:bg-opacity-90 transition-all whitespace-nowrap"
            >
              Donate Now
            </a>
          </div>
        </div>
      </section>
      <section id="about" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
          <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="relative h-[400px] rounded-lg overflow-hidden">
              <img
                src="https://public.readdy.ai/ai/img_res/ab2063a393eb733b373c1df73839595d.jpg"
                class="absolute inset-0 w-full h-full object-cover"
                alt="About Us"
              />
            </div>
            <div>
              <h2 class="text-3xl font-bold mb-6">Our Mission</h2>
              <p class="text-gray-600 mb-6">
                Since 2010, we've been dedicated to creating lasting change in
                communities across India. Our mission is to empower individuals
                through education, healthcare, and sustainable development
                initiatives.
              </p>
              
              <a
                href="#"
                class="inline-block bg-white border-2 border-primary text-primary px-6 py-3 !rounded-button font-semibold hover:bg-primary hover:text-white transition-all whitespace-nowrap"
              >
                Learn More About Us
              </a>
            </div>
          </div>
        </div>
      </section>
      <section id="donate" class="py-20">
        <div class="container mx-auto px-6">
          <h2 class="text-3xl font-bold text-center mb-12">Make a Donation</h2>
          <div class="max-w-2xl mx-auto">
            <div class="bg-white rounded-lg shadow-lg p-8">
              <div class="space-y-8">
                <div class="flex flex-col items-center mb-8">
                  <div class="text-2xl font-bold text-gray-800 mb-4">
                    Choose Your Impact
                  </div>
                  <div class="flex flex-wrap gap-4 justify-center">
                    <div
                      class="donation-option group cursor-pointer w-[280px] bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-6 border-2 border-transparent hover:border-primary"
                      data-amount="500"
                    >
                      <div class="flex items-center justify-between mb-4">
                        <span class="text-xl font-bold text-primary">₹500</span>
                        <div class="w-8 h-8 flex items-center justify-center">
                          <i
                            class="ri-heart-line text-primary group-hover:hidden"
                          ></i>
                          <i
                            class="ri-heart-fill text-primary hidden group-hover:block"
                          ></i>
                        </div>
                      </div>
                      <h3 class="font-semibold mb-2">Feed a Family</h3>
                      <p class="text-sm text-gray-600">
                        Provide nutritious meals for a family of four for one
                        week
                      </p>
                    </div>
                    <div
                      class="donation-option group cursor-pointer w-[280px] bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-6 border-2 border-transparent hover:border-primary"
                      data-amount="1000"
                    >
                      <div class="flex items-center justify-between mb-4">
                        <span class="text-xl font-bold text-primary"
                          >₹1,000</span
                        >
                        <div class="w-8 h-8 flex items-center justify-center">
                          <i
                            class="ri-book-line text-primary group-hover:hidden"
                          ></i>
                          <i
                            class="ri-book-fill text-primary hidden group-hover:block"
                          ></i>
                        </div>
                      </div>
                      <h3 class="font-semibold mb-2">Support Education</h3>
                      <p class="text-sm text-gray-600">
                        Provide school supplies and books for two children
                      </p>
                    </div>
                    <div
                      class="donation-option group cursor-pointer w-[280px] bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-6 border-2 border-transparent hover:border-primary"
                      data-amount="2000"
                    >
                      <div class="flex items-center justify-between mb-4">
                        <span class="text-xl font-bold text-primary"
                          >₹2,000</span
                        >
                        <div class="w-8 h-8 flex items-center justify-center">
                          <i
                            class="ri-first-aid-kit-line text-primary group-hover:hidden"
                          ></i>
                          <i
                            class="ri-first-aid-kit-fill text-primary hidden group-hover:block"
                          ></i>
                        </div>
                      </div>
                      <h3 class="font-semibold mb-2">Healthcare Support</h3>
                      <p class="text-sm text-gray-600">
                        Fund medical checkups for 5 elderly people
                      </p>
                    </div>
                    <div
                      class="donation-option group cursor-pointer w-[280px] bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-6 border-2 border-transparent hover:border-primary"
                      data-amount="5000"
                    >
                      <div class="flex items-center justify-between mb-4">
                        <span class="text-xl font-bold text-primary"
                          >₹5,000</span
                        >
                        <div class="w-8 h-8 flex items-center justify-center">
                          <i
                            class="ri-home-line text-primary group-hover:hidden"
                          ></i>
                          <i
                            class="ri-home-fill text-primary hidden group-hover:block"
                          ></i>
                        </div>
                      </div>
                      <h3 class="font-semibold mb-2">Shelter Program</h3>
                      <p class="text-sm text-gray-600">
                        Contribute to building homes for homeless families
                      </p>
                    </div>
                  </div>
                </div>
                <div class="max-w-md mx-auto">
                  <div class="mb-6">
                    <label class="block text-gray-700 mb-2"
                      >Custom Amount (₹)</label
                    >
                    <div class="relative">
                      <span
                        class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500"
                        >₹</span
                      >
                      <input
                        type="text"
                        id="customAmount"
                        class="w-full pl-8 pr-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none text-lg"
                        placeholder="Enter your amount"
                      />
                    </div>
                    <div class="text-sm text-gray-500 mt-2">
                      * Minimum donation amount is ₹100
                    </div>
                  </div>
                  
                  <button
                    id="generateQR"
                    class="w-full bg-primary text-white py-4 !rounded-button font-semibold hover:bg-opacity-90 transition-all mb-2 whitespace-nowrap flex items-center justify-center"
                  >
                    <i class="ri-qr-code-line mr-2"></i>
                    Generate QR Code
                  </button>
                  <p class="text-center text-sm text-gray-500">
                    Secure payment powered by UPI
                  </p>
                </div>
              </div>
              <div id="qrCodeContainer" class="hidden">
                <div
                  class="border-2 border-gray-200 rounded-lg p-6 text-center"
                >
                  <div id="qrCode" class="w-48 h-48 mx-auto mb-4"></div>
                  <p class="text-gray-600 mb-4">
                    Scan this QR code to make your donation
                  </p>
                  <button
                    id="saveQR"
                    class="bg-secondary text-white px-6 py-2 !rounded-button font-semibold hover:bg-opacity-90 transition-all whitespace-nowrap"
                  >
                    Save QR Code
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="photos" class="py-20">
        <div class="container mx-auto px-6">
          <h2 class="text-3xl font-bold text-center mb-4">Photo Gallery</h2>
          <p class="text-gray-600 text-center mb-12 max-w-2xl mx-auto">
            Capturing moments of hope, transformation and community impact
            through our lens.
          </p>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="grid gap-8">
              <div class="relative group overflow-hidden rounded-lg h-[400px]">
                <img
                  src="child.webp"
                  alt="Education"
                  class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110"
                />
                <div
                  class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6"
                >
                  <div>
                    <p class="text-white text-lg font-semibold mb-2">
                      Education Programs
                    </p>
                    <p class="text-white/80 text-sm">
                      Empowering children through quality education and modern
                      learning facilities
                    </p>
                  </div>
                </div>
              </div>
              <div class="relative group overflow-hidden rounded-lg h-[280px]">
                <img
                  src="health.webp"
                  alt="Healthcare"
                  class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110"
                />
                <div
                  class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6"
                >
                  <div>
                    <p class="text-white text-lg font-semibold mb-2">
                      Healthcare Services
                    </p>
                    <p class="text-white/80 text-sm">
                      Providing accessible healthcare services to rural
                      communities
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid gap-8">
              <div class="relative group overflow-hidden rounded-lg h-[280px]">
                <img
                  src="women.avif"
                  alt="Women Empowerment"
                  class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110"
                />
                <div
                  class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6"
                >
                  <div>
                    <p class="text-white text-lg font-semibold mb-2">
                      Women Empowerment
                    </p>
                    <p class="text-white/80 text-sm">
                      Supporting women entrepreneurs through skill development
                    </p>
                  </div>
                </div>
              </div>
              <div class="relative group overflow-hidden rounded-lg h-[400px]">
                <img
                  src="sport.jpg"
                  alt="Sustainable Agriculture"
                  class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110"
                />
                <div
                  class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6"
                >
                  <div>
                    <p class="text-white text-lg font-semibold mb-2">
                      sports
                    </p>
                    <p class="text-white/80 text-sm">
                      Promoting sustainable farming practices for better yields
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid gap-8">
              <div class="relative group overflow-hidden rounded-lg h-[400px]">
                <img
                  src="community.webp"
                  alt="Community Development"
                  class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110"
                />
                <div
                  class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6"
                >
                  <div>
                    <p class="text-white text-lg font-semibold mb-2">
                      Community Development
                    </p>
                    <p class="text-white/80 text-sm">
                      Building stronger communities through infrastructure
                      projects
                    </p>
                  </div>
                </div>
              </div>
              <div class="relative group overflow-hidden rounded-lg h-[280px]">
                <img
                  src="https://public.readdy.ai/ai/img_res/d94c4183918e31760254a0797b2b5c78.jpg"
                  alt="Clean Water"
                  class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110"
                />
                <div
                  class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6"
                >
                  <div>
                    <p class="text-white text-lg font-semibold mb-2">
                      Clean Water Initiative
                    </p>
                    <p class="text-white/80 text-sm">
                      Ensuring access to clean and safe drinking water
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-12 text-center">
            <button
              class="bg-primary text-white px-8 py-3 !rounded-button font-semibold hover:bg-opacity-90 transition-all whitespace-nowrap inline-flex items-center"
            >
              View Full Gallery
              <i class="ri-arrow-right-line ml-2"></i>
            </button>
          </div>
        </div>
      </section>
      <section id="impact" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
          <h2 class="text-3xl font-bold text-center mb-4">Impact Stories</h2>
          <p class="text-gray-600 text-center mb-12 max-w-2xl mx-auto">
            Real stories from the people whose lives have been transformed
            through our initiatives and your generous support.
          </p>
          <div class="grid md:grid-cols-2 gap-8 mb-16">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
              <img
                src="https://public.readdy.ai/ai/img_res/5dc3054bcba6043db3a4812f71856b15.jpg"
                class="w-full h-48 object-cover"
                alt="Education Impact"
              />
              <div class="p-6">
                <h3 class="text-xl font-bold mb-4">
                  Education Initiative Impact
                </h3>
                <p class="text-gray-600 mb-4">
                  Our education programs have helped over 1000 children access
                  quality education in 2018-2024. Through modern facilities and
                  dedicated teachers, we've seen a 40% improvement in academic
                  performance.
                </p>
                <div class="flex items-center justify-between">
                  <div class="flex items-center">
                    <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                      <img
                        src="meera mam.png"
                        class="w-full h-full object-cover"
                        alt="Testimonial"
                      />
                    </div>
                    <div>
                      <h4 class="font-semibold">Meera mam</h4>
                      <p class="text-gray-500 text-sm">Teacher</p>
                    </div>
                  </div>
                  <a
                    href="#"
                    class="text-primary hover:text-opacity-80 flex items-center"
                  >
                    
                  </a>
                </div>
              </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
              <img
                src="https://public.readdy.ai/ai/img_res/8f62dfa0525bb4a524c557f6caa4a24e.jpg"
                class="w-full h-48 object-cover"
                alt="Healthcare Impact"
              />
              <div class="p-6">
                <h3 class="text-xl font-bold mb-4">
                  Healthcare Program Success
                </h3>
                <p class="text-gray-600 mb-4">
                  In 2024, our mobile health clinics served 1,100+ patients
                  across 10 villages. We've reduced preventable diseases by 60%
                  through regular health camps and awareness programs.
                </p>
                <div class="flex items-center justify-between">
                  <div class="flex items-center">
                    <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                      <img
                        src="docter.png"
                        class="w-full h-full object-cover"
                        alt="Testimonial"
                      />
                    </div>
                    <div>
                      <h4 class="font-semibold">Dr. Kumari</h4>
                      <p class="text-gray-500 text-sm">Junior Doctor</p>
                    </div>
                  </div>
                  <a
                    href="#"
                    class="text-primary hover:text-opacity-80 flex items-center"
                  >
                   
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="bg-white rounded-lg shadow-lg p-8">
            <h3 class="text-xl font-bold text-center mb-8">
              Community Testimonials
            </h3>
            <div class="relative">
              <div id="testimonialSlider" class="overflow-hidden">
                <div
                  class="testimonial-slider flex transition-transform duration-500"
                >
                  <div class="w-full md:w-1/3 flex-shrink-0 px-4">
                    <div class="text-center">
                      <div class="mb-4 relative">
                        <img
                          src="Lakshmi Devi.png"
                          class="w-24 h-24 rounded-full mx-auto object-cover border-4 border-primary"
                          alt="Testimonial 1"
                        />
                        <div
                          class="absolute -bottom-2 right-1/2 transform translate-x-1/2 bg-primary text-white px-4 py-1 rounded-full text-sm"
                        >
                          Education
                        </div>
                      </div>
                      <p class="text-gray-600 mb-4">
                        "The Helping Hand has changed my life. At 45,
                        I can now read and write, helping me manage my small
                        business better and support my children's education."
                      </p>
                      <div>
                        <h4 class="font-semibold">Lakshmi Devi</h4>
                        <p class="text-gray-500">Small Business Owner</p>
                      </div>
                    </div>
                  </div>
                  <div class="w-full md:w-1/3 flex-shrink-0 px-4">
                    <div class="text-center">
                      <div class="mb-4 relative">
                        <img
                          src="https://public.readdy.ai/ai/img_res/1081b64a88a53a970af9b67b12793c23.jpg"
                          class="w-24 h-24 rounded-full mx-auto object-cover border-4 border-primary"
                          alt="Testimonial 2"
                        />
                        <div
                          class="absolute -bottom-2 right-1/2 transform translate-x-1/2 bg-primary text-white px-4 py-1 rounded-full text-sm"
                        >
                          Agriculture
                        </div>
                      </div>
                      <p class="text-gray-600 mb-4">
                        "The sustainable farming training has doubled my crop
                        yield. The organic farming techniques have not only
                        increased my income but also improved soil health."
                      </p>
                      <div>
                        <h4 class="font-semibold">Ramesh Singh</h4>
                        <p class="text-gray-500">Organic Farmer</p>
                      </div>
                    </div>
                  </div>
                  <div class="w-full md:w-1/3 flex-shrink-0 px-4">
                    <div class="text-center">
                      <div class="mb-4 relative">
                        <img
                          src="https://public.readdy.ai/ai/img_res/0e40b3b88e036d00b58d6495399b2c3b.jpg"
                          class="w-24 h-24 rounded-full mx-auto object-cover border-4 border-primary"
                          alt="Testimonial 3"
                        />
                        <div
                          class="absolute -bottom-2 right-1/2 transform translate-x-1/2 bg-primary text-white px-4 py-1 rounded-full text-sm"
                        >
                          Women Empowerment
                        </div>
                      </div>
                      <p class="text-gray-600 mb-4">
                        "The women's entrepreneurship program gave me the skills
                        and confidence to start my own business. Today, I employ
                        5 other women from my community."
                      </p>
                      <div>
                        <h4 class="font-semibold">Priya Malhotra</h4>
                        <p class="text-gray-500">Entrepreneur</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <button
                id="prevSlide"
                class="absolute left-0 top-1/2 -translate-y-1/2 w-10 h-10 bg-white rounded-full shadow-lg flex items-center justify-center text-gray-600 hover:text-primary"
              >
                <i class="ri-arrow-left-s-line ri-lg"></i>
              </button>
              <button
                id="nextSlide"
                class="absolute right-0 top-1/2 -translate-y-1/2 w-10 h-10 bg-white rounded-full shadow-lg flex items-center justify-center text-gray-600 hover:text-primary"
              >
                <i class="ri-arrow-right-s-line ri-lg"></i>
              </button>
            </div>
          </div>
          <div class="mt-16 text-center">
            <a
              href="#"
              class="inline-flex items-center bg-primary text-white px-8 py-3 !rounded-button font-semibold hover:bg-opacity-90 transition-all whitespace-nowrap"
            >
              View All Impact Stories
              <i class="ri-arrow-right-line ml-2"></i>
            </a>
          </div>
        </div>
      </section>
      <form action="https://api.web3forms.com/submit" method="POST" id="contactForm" class="space-y-6" onsubmit="return submitForm(this, 'contact.php')">
        <input type="hidden" name="access_key" value="">
        <div class="container mx-auto px-6">
          <div class="grid md:grid-cols-2 gap-12">
            <div>
              <h2 class="text-3xl font-bold mb-8">Contact Us</h2>
              <form id="contactForm" class="space-y-6">
                <div>
                  <label class="block text-gray-700 mb-2">Name</label>
                  <input
                    type="text"
                    class="w-full px-4 py-3 border-2 border-gray-200 rounded focus:border-primary focus:outline-none"
                    required
                  />
                </div>
                <div>
                  <label class="block text-gray-700 mb-2">Email</label>
                  <input
                    type="email"
                    class="w-full px-4 py-3 border-2 border-gray-200 rounded focus:border-primary focus:outline-none"
                    required
                  />
                </div>
                <div>
                  <label class="block text-gray-700 mb-2">Message</label>
                  <textarea
                    class="w-full px-4 py-3 border-2 border-gray-200 rounded focus:border-primary focus:outline-none"
                    rows="4"
                    required
                  ></textarea>
                </div>
                <button
                  type="submit"
                  class="bg-primary text-white px-8 py-3 !rounded-button font-semibold hover:bg-opacity-90 transition-all whitespace-nowrap"
                >
                  Send Message
                </button>
              </form>
            </div>
            <div>
              <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
                <h3 class="text-xl font-semibold mb-6">Get in Touch</h3>
                <div class="space-y-4">
                  <div class="flex items-start">
                    <div
                      class="w-10 h-10 flex items-center justify-center text-primary"
                    >
                      <i class="ri-map-pin-line ri-lg"></i>
                    </div>
                    <div class="ml-4">
                      <h4 class="font-semibold">Address</h4>
                      <p class="text-gray-600">
                        Helping Hands, 23A Syed Amir Ali Avenue, Kolkata, West
                        Bengal 700017
                      </p>
                    </div>
                  </div>
                  <div class="flex items-start">
                    <div
                      class="w-10 h-10 flex items-center justify-center text-primary"
                    >
                      <i class="ri-mail-line ri-lg"></i>
                    </div>
                    <div class="ml-4">
                      <h4 class="font-semibold">Email</h4>
                      <p class="text-gray-600">info@hopefoundation.org</p>
                    </div>
                  </div>
                  <div class="flex items-start">
                    <div
                      class="w-10 h-10 flex items-center justify-center text-primary"
                    >
                      <i class="ri-phone-line ri-lg"></i>
                    </div>
                    <div class="ml-4">
                      <h4 class="font-semibold">Phone</h4>
                      <p class="text-gray-600">+91 80 2345 6789</p>
                    </div>
                  </div>
                  <div class="flex items-start">
                    <div
                      class="w-10 h-10 flex items-center justify-center text-primary"
                    >
                      <i class="ri-time-line ri-lg"></i>
                    </div>
                    <div class="ml-4">
                      <h4 class="font-semibold">Office Hours</h4>
                      <p class="text-gray-600">
                        Monday - Friday: 9:00 AM - 6:00 PM
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="h-64 rounded-lg overflow-hidden">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.0459766001247!2d88.38025961492947!3d22.542555985197716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0277e27db50691%3A0xcfb17f30da50c04c!2sHelping%20Hands!5e0!3m2!1sen!2sin!4v1645771234567!5m2!1sen!2sin"
                  width="100%"
                  height="100%"
                  style="border:0;"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                  class="w-full h-full"
                ></iframe>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="bg-gray-900 text-white py-12">
      <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-3 gap-12">
          <div>
            <h3 class="text-xl font-semibold mb-6">Quick Links</h3>
            <ul class="space-y-3">
              <li><a href="#" class="hover:text-primary">Home</a></li>
              <li><a href="#about" class="hover:text-primary">About Us</a></li>
              <li><a href="#donate" class="hover:text-primary">Donate</a></li>
              <li><a href="#photos" class="hover:text-primary">Gallery</a></li>
              <li>
                <a href="#impact" class="hover:text-primary">Impact Stories</a>
              </li>
              <li><a href="#contact" class="hover:text-primary">Contact</a></li>
            </ul>
          </div>
          <div>
            <h3 class="text-xl font-semibold mb-6">Newsletter</h3>
            <p class="text-gray-400 mb-4">
              Stay updated with our latest news and updates.
            </p>
            <form id="newsletterForm" onsubmit="return submitForm(this, 'newsletter.php')" class="space-y-4">
              <input
                type="email"
                class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded focus:border-primary focus:outline-none"
                placeholder="Enter your email"
              />
              <button
                type="submit"
                class="bg-primary text-white px-6 py-3 !rounded-button font-semibold hover:bg-opacity-90 transition-all whitespace-nowrap"
              >
                Subscribe
              </button>
            </form>
          </div>
          <div>
            <h3 class="text-xl font-semibold mb-6">Connect With Us</h3>
            <div class="flex space-x-4">
              <a
                href="https://www.facebook.com/helpinghandsngo/"
                class="w-10 h-10 flex items-center justify-center bg-gray-800 rounded-full hover:bg-primary transition-all"
              >
                <i class="ri-facebook-fill ri-lg"></i>
              </a>
              <a
                href="#"
                class="w-10 h-10 flex items-center justify-center bg-gray-800 rounded-full hover:bg-primary transition-all"
              >
                <i class="ri-twitter-fill ri-lg"></i>
              </a>
              <a
                href="#"
                class="w-10 h-10 flex items-center justify-center bg-gray-800 rounded-full hover:bg-primary transition-all"
              >
                <i class="ri-instagram-fill ri-lg"></i>
              </a>
              
            </div>
          </div>
        </div>
        <div
          class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center"
        >
          <p class="text-gray-400">
            &copy; 2025 Hope Foundation. All rights reserved.
          </p>
          <div class="flex space-x-6 mt-4 md:mt-0">
            <a href="#" class="text-gray-400 hover:text-primary"
              >Privacy Policy</a
            >
            <a href="#" class="text-gray-400 hover:text-primary"
              >Terms of Service</a
            >
          </div>
        </div>
      </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <script>
      // Function to show notification
    // Add this function to your existing script
function submitForm(form, actionUrl) {
    // Prevent default form submission
    event.preventDefault();
    
    // Create FormData object from the form
    const formData = new FormData(form);
    
    // Show loading state
    const submitBtn = form.querySelector('button[type="submit"]');
    const originalBtnText = submitBtn.innerHTML;
    submitBtn.innerHTML = 'Processing...';
    submitBtn.disabled = true;

    // Send AJAX request
    fetch(actionUrl, {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (!response.ok) throw new Error('Network response was not ok');
        return response.json();
    })
    .then(data => {
        if(data.status === 'success') {
            showToast(data.message, 'success');
            form.reset();
        } else {
            showToast(data.message, 'error');
        }
    })
    .catch(error => {
        showToast('An error occurred. Please try again.', 'error');
        console.error('Error:', error);
    })
    .finally(() => {
        // Reset button state
        submitBtn.innerHTML = originalBtnText;
        submitBtn.disabled = false;
    });
    
    return false;
}

// Make sure you have this toast notification function (add if missing)
function showToast(message, type = "success") {
    const toast = document.createElement("div");
    toast.className = `fixed top-4 right-4 px-6 py-3 rounded shadow-lg z-50 ${
        type === "success" ? "bg-green-500" : "bg-red-500"
    } text-white transform transition-all duration-300 translate-y-[-100%]`;
    toast.textContent = message;
    document.body.appendChild(toast);
    
    // Animate in
    setTimeout(() => {
        toast.style.transform = "translateY(0)";
    }, 10);
    
    // Remove after 3 seconds
    setTimeout(() => {
        toast.style.transform = "translateY(-100%)";
        setTimeout(() => toast.remove(), 300);
    }, 3000);
}
      document.addEventListener("DOMContentLoaded", function () {
        const mobileMenuBtn = document.getElementById("mobileMenuBtn");
        const mobileMenu = document.getElementById("mobileMenu");
        const amountBtns = document.querySelectorAll(".amount-btn");
        const customAmount = document.getElementById("customAmount");
        const generateQRBtn = document.getElementById("generateQR");
        const qrCodeContainer = document.getElementById("qrCodeContainer");
        const qrCodeElement = document.getElementById("qrCode");
        const saveQRBtn = document.getElementById("saveQR");
        const contactForm = document.getElementById("contactForm");
        const newsletterForm = document.getElementById("newsletterForm");
        const testimonialSlider = document.getElementById("testimonialSlider");
        const prevSlideBtn = document.getElementById("prevSlide");
        const nextSlideBtn = document.getElementById("nextSlide");
        let currentSlide = 0;
        const totalSlides = 3;
        let qrCode = null;
        // Add click event listeners to all buttons
        document.querySelectorAll("button").forEach((button) => {
          button.addEventListener("click", function (e) {
            // Add ripple effect
            const ripple = document.createElement("div");
            ripple.classList.add("ripple");
            this.appendChild(ripple);
            // Get button position
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            ripple.style.left = x + "px";
            ripple.style.top = y + "px";
            // Remove ripple after animation
            setTimeout(() => ripple.remove(), 600);
            // Add active state
            this.classList.add("active");
            setTimeout(() => this.classList.remove("active"), 200);
          });
        });
        // Add hover effect to all buttons
        document.querySelectorAll("button").forEach((button) => {
          button.addEventListener("mouseenter", function () {
            this.style.transform = "scale(1.05)";
            this.style.transition = "transform 0.2s ease";
          });
          button.addEventListener("mouseleave", function () {
            this.style.transform = "scale(1)";
          });
        });
        mobileMenuBtn.addEventListener("click", () => {
          mobileMenu.classList.toggle("hidden");
        });
        // Handle donation option selection
        document.querySelectorAll(".donation-option").forEach((option) => {
          option.addEventListener("click", () => {
            // Remove selected state from all options
            document.querySelectorAll(".donation-option").forEach((opt) => {
              opt.classList.remove("border-primary");
            });
            // Add selected state to clicked option
            option.classList.add("border-primary");
            // Update custom amount input
            customAmount.value = option.dataset.amount;
            // Smooth scroll to custom amount section
            customAmount.scrollIntoView({ behavior: "smooth", block: "center" });
          });
        });
        // Handle frequency selection
        document.querySelectorAll(".frequency-btn").forEach((btn) => {
          btn.addEventListener("click", () => {
            // Remove selected state from all frequency buttons
            document.querySelectorAll(".frequency-btn").forEach((b) => {
              b.classList.remove("border-primary", "text-primary");
            });
            // Add selected state to clicked button
            btn.classList.add("border-primary", "text-primary");
          });
        });
        // Validate custom amount input
        customAmount.addEventListener("input", (e) => {
  // Get raw numeric value
  let value = e.target.value.replace(/[^0-9]/g, "");
  
  if (value) {
    const numericValue = parseInt(value);
    
    // Update validation
    if (numericValue < 100) {
      showToast("Minimum donation amount is ₹100", "error");
      generateQRBtn.disabled = true;
      generateQRBtn.classList.add("opacity-50");
    } else {
      generateQRBtn.disabled = false;
      generateQRBtn.classList.remove("opacity-50");
    }
    
    // Format display value
    e.target.value = "₹" + numericValue.toLocaleString("en-IN");
  } else {
    e.target.value = "";
  }
});
        generateQRBtn.addEventListener("click", () => {
  // Get raw number value without currency symbol
  const rawValue = customAmount.value.replace(/[^0-9]/g, "");
  const amount = parseInt(rawValue);

  if (!amount || amount < 100) {
    showToast("Minimum donation amount is ₹100", "error");
    return;
  }

  qrCodeContainer.classList.remove("hidden");
  qrCodeElement.innerHTML = "";
  qrCode = new QRCode(qrCodeElement, {
    text: `upi://pay?pa=8294881973@ibl&pn=Hope Foundation&am=${amount}&cu=INR`,
    width: 192,
    height: 192,
  });
});
        saveQRBtn.addEventListener("click", () => {
          if (!qrCode) return;
          const canvas = qrCodeElement.querySelector("canvas");
          const image = canvas.toDataURL("image/png");
          const link = document.createElement("a");
          link.href = image;
          link.download = "donation-qr.png";
          link.click();
        });
        function showNotification(message, type = "success") {
          showToast(message, type);
        }
        contactForm.addEventListener("submit", (e) => {
          e.preventDefault();
          showNotification("Message sent successfully!");
          contactForm.reset();
        });
        newsletterForm.addEventListener("submit", (e) => {
          e.preventDefault();
          showNotification("Successfully subscribed to newsletter!");
          newsletterForm.reset();
        });
        function updateSlider() {
          const offset = -currentSlide * 100;
          testimonialSlider.querySelector(".testimonial-slider").style.transform =
            `translateX(${offset}%)`;
        }
        prevSlideBtn.addEventListener("click", () => {
          currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
          updateSlider();
        });
        nextSlideBtn.addEventListener("click", () => {
          currentSlide = (currentSlide + 1) % totalSlides;
          updateSlider();
        });
        // Remove auto slide
        document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
          anchor.addEventListener("click", function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute("href"));
            if (target) {
              window.scrollTo({
                top: target.offsetTop - 64,
                behavior: "smooth",
              });
              if (mobileMenu.classList.contains("block")) {
                mobileMenu.classList.remove("block");
              }
            }
          });
        });
      });
    </script>
  </body>
</html>
