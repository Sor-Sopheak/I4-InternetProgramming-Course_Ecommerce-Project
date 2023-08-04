<template>
  <div class="w-full">
    <section>
      <div class="">
        <div class="relative h-[300px]">
          <img src="@/assets/images/officeshop.jpg" alt="" class="object-cover h-[300px] w-[100%] opacity-75">
          <p class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-6xl text-white text-shadow">Contact Us</p>
        </div>

        <div class="flex flex-col text-center mt-12">
          <p class="font-bold text-4xl pb-5">Get In Touch With Us</p>
          <p class="text-[#6d6d6d]">Please contact us using the informatioin below. To locate contact in the Business </p>
          <p class="text-[#6d6d6d]">office closet to you, visit our office websites.</p>
          <div class="flex justify-between m-12">
            <div class="flex justify-between text-start items-center w-[280px]">
              <img src="@/assets/images/location.png" alt="" class="object-cover h-[80px] w-[80px]">
              <div>
                <p class="font-bold text-xl pb-5">Office</p>
                <p class="text-[#6d6d6d]">Phnom Penh, Sensok,</p>
                <p class="text-[#6d6d6d]">Cambodia</p>
              </div>
            </div>

            <div class="flex justify-between text-start items-center w-[250px]">
              <img src="@/assets/images/phonecall.png" alt="" class="object-cover h-[80px] w-[80px]">
              <div>
                <p class="font-bold text-xl pb-5">Call Us</p>
                <p class="text-[#6d6d6d]">(+855) 23 123 098</p>
                <p class="text-[#6d6d6d]">(+855) 23 123 099</p>
              </div>
            </div>

            <div class="flex justify-between text-start items-center w-[350px]">
              <img src="@/assets/images/email.png" alt="" class="object-cover h-[80px] w-[80px]">
              <div>
                <p class="font-bold text-xl pb-5">Send Us</p>
                <p class="text-[#6d6d6d]">stylemingle.com</p>
                <p class="text-[#6d6d6d]">ssopheaksor2002@gmail.com</p>
              </div>
            </div>
          </div>
        </div>

        <div class="grid grid-cols-2 bg-[#ececec]">
          <div class="flex flex-col justify-center items-center text-center">
            <p class="text-2xl pb-4 pt-8">Drop Us A Line</p>
            <div class="w-[50%] text-[#6d6d6d]">
              <p>Whether you have a question about features, trails, pricing, or anything else, our team is ready to answer.</p>
            </div>

            <div class="mt-12">
              <textarea name="" id="" cols="45" rows="4" placeholder="Your Message" class="border-2 rounded p-2 outline-none"></textarea>
              <div class="flex justify-between pt-2">
                <input type="text" placeholder="Your Name" class="bg-white rounded-full outline-none h-[30px] w-[150px] text-sm px-2">
                <input type="email" placeholder="Your Email" class="bg-white rounded-full outline-none h-[30px] w-[150px] text-sm px-2">
              </div>
              <button class="w-[100%] h-[30px] hover:bg-white hover:text-black bg-black text-white text-sm rounded-full mt-4">SUBMIT</button>
            </div>
          </div>

          <div class="h-[450px]">
            <iframe class="object-cover h-[450px] filter grayscale-[50%]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.472126613028!2d104.8698086096336!3d11.517951388632271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109506c79f21167%3A0xf2aacd9522c28081!2sST!5e0!3m2!1sen!2skh!4v1689150646050!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </section>

    <div class="w-[100%] h-px bg-gray-300 mt-28"></div>
    <Footer/>
  </div>
</template>

<script>
import NavbarGuest from'@/components/NavbarGuest.vue'
import Footer from'@/components/Footer.vue'

export default {
  components : { NavbarGuest, Footer},
  //click nav change color 
  data() {
    return {
      links: [
        { text: 'Home', clicked: false },
        { text: "Collection", clicked: false },
        { text: "Category", clicked: false },
        { text: 'About us', clicked: false },
        { text: 'Contact us', clicked: true },
      ]
    };
  },
  methods: {
    changeColor(index) {
      this.links.forEach((link, i) => {
        link.clicked = i === index;
      });
    }
  }
};
</script>
<style>
@import url('https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Jolly+Lodger&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Dancing+Script&family=Jolly+Lodger&display=swap');

.font-jolly{
  font-family: 'Jolly Lodger', cursive;
}
.font-itim{ 
  font-family: 'Itim', cursive;
}
.font-jaldi{
  font-family: 'Jaldi', sans-serif;
}
.font-dancing{
  font-family: 'Dancing Script', cursive;
}

.text-shadow {
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}
</style>
