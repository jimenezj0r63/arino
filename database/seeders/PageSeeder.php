<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::create(['title' => 'Home', 'slug' => '/', 'type' => 'custom', 'sections' => '[]', 'sections_data' => '{"hero_section":{"layout":"1","title":"Creativity In Our Blood Line","sub_title":"We deliver best problem solving solution for our client and provide finest finishing product in present and upcoming future.","action_text":"Get a Quote","background_image_url":"\/static\/hero_bg.jpeg","action_url":"https:\/\/google.com","social_links":{"title":"Follow Us","links":[{"title":"Facebook","url":"https:\/\/facebook.com"},{"title":"Twitter","url":"https:\/\/twitter.com"},{"title":"Instagram","url":"https:\/\/instagram.com"}]},"email_address":"mahadicreation@gmail.com","phone_number":"01722285902","photography_slider":[{"title":"Wedding","imageUrl":"\/static\/wedding.jpeg","href":"\/service\/service-details"},{"title":"Fashion","imageUrl":"\/static\/fashion.jpeg","href":"\/service\/service-details"},{"title":"Commercial","imageUrl":"\/static\/commercial.jpeg","href":"\/service\/service-details"},{"title":"Landscape","imageUrl":"\/static\/landscape.jpeg","href":"\/service\/service-details"}]},"our_fun_fact_section":{"layout":"1","title":"Our fun fact","sub_title":"Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.","background_color":"linear-gradient(267.18deg, #161616 0%, #080808 100%)","fun_facts":[{"title":"Global Happy Clients","value":"40K"},{"title":"Project Completed","value":"50K"},{"title":"Team Members","value":"245"},{"title":"Digital products","value":"550"}]},"service_section":{"layout":"1","title":"Services we can help you with","sub_title":"What Can We Do","action_text":"See All Services","action_url":"#"},"portfolio_section":{"layout":"1","title":"Portfolio to explore","sub_title":"Latest Projects","action_text":"See Details"},"award_section":{"title":"We get multiple awards","sub_title":"Our Awards","items":[{"year":2019,"title":"Google awards","list_item":["Website of the day","Mobile exelence"]},{"year":2019,"title":"Google awards","list_item":["Website of the day","Mobile exelence"]},{"year":2019,"title":"Google awards","list_item":["Website of the day","Mobile exelence"]},{"year":2019,"title":"Google awards","list_item":["Website of the day","Mobile exelence"]},{"year":2019,"title":"Google awards","list_item":["Website of the day","Mobile exelence"]},{"year":2019,"title":"Google awards","list_item":["Website of the day","Mobile exelence"]},{"year":2019,"title":"Google awards","list_item":["Website of the day","Mobile exelence"]},{"year":2019,"title":"Google awards","list_item":["Website of the day","Mobile exelence"]}]},"video_section":{"layout":"1","title":"Our agile process is ability to adapt and respond to change. Agile organizations view change as an opportunity, not a threat.","sub_title":null,"thumbnail_image_url":"\/storage\/pages\/wYjjBk9E0u24fDxWuEtuR4I59nBDzUDwj3YfGuRT.jpg","video_url":"https:\/\/www.youtube.com\/watch?v=rIfdg_Ot-LI","action_text":"Learn more","action_url":null},"our_team_section":{"title":"Awesome team members","sub_title":"Our team"},"testimonial_section":[],"our_blog":{"layout":"1","title":"Explore recent publication","sub_title":"Our Blog","action_text":"View More Blog"},"moving_text_section":{"text":"Our reputed world wide partners"},"partner_section":{"layout":"1","title":"Top Clients","sub_title":"Our reputed partner","logos":["\/static\/partner_1.svg","\/static\/partner_2.svg","\/static\/partner_3.svg","\/static\/partner_4.svg","\/static\/partner_5.svg"]},"cta_section":{"title":"Let\u2019s disscuse make <br \/>something <i>cool<\/i> together","background_image_url":"\/storage\/pages\/K2gbQWuWCaCgRnt2LRfB19E0OM9VuOhR8cvu2rHP.jpg","action_text":"Apply For Metting","action_url":"#"},"pricing_section":{"title":"Pricing & Packaging","sub_title":"Providing best pricing for client","currency_symbol":"$","plans":[{"name":"Standard","price":{"monthly":10,"yearly":10},"features":["Static responsive website","Video marketing","Keywords research","Facebook campaign","eCommerce solution","Google adword"],"action_text":"Purchase Now","action_url":"#"},{"name":"Professional","price":{"monthly":99,"yearly":199},"features":["Static responsive website","Video marketing","Keywords research","Facebook campaign","eCommerce solution","Google adword"],"action_text":"Purchase Now","action_url":"#"},{"name":"Ultimate","price":{"monthly":199,"yearly":299},"features":["Static responsive website","Video marketing","Keywords research","Facebook campaign","eCommerce solution","Google adword"],"action_text":"Purchase Now","action_url":"#"}]},"contact_section":{"layout":"2","title":"Contact Us","sub_title":"Getting touch","action_button_text":"Send Message","map_iframe_url":"https:\/\/www.google.com\/maps\/embed?pb=!1m18!1m12!1m3!1d96652.27317354927!2d-74.33557928194516!3d40.79756494697628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3a82f1352d0dd%3A0x81d4f72c4435aab5!2sTroy+Meadows+Wetlands!5e0!3m2!1sen!2sbd!4v1563075599994!5m2!1sen!2sbd","phone_number":"+44 454 7800 112","email_address":"infotech@arino.com","address":"50 Wall Street Suite, 44150 Ohio, United States"},"case_study_section":{"title":"Case Study","sub_title":"Featured case study"},"about_section":{"layout":"1","description":"This is the main factor that sets us apart from our competition and allows us to deliver a specialist business consultancy service. Our team applies its wide-ranging experience to determining. Through our years of experience, we\u2019ve also learned that while each channel.","photos":["\/storage\/pages\/5TQUCyH6qAyEHyjd31J3BIEEyBgpgXzwBvcUUsJw.jpg","\/storage\/pages\/OtkldinvaxOaXIUTfXcSkyu5hPFatPnu9NMtKvFh.jpg","\/storage\/pages\/FnGfSsgABe4ruPpsoSZJBrfdwGO6SVgTNglLdWRV.jpg"],"title":"About Us","sub_title":"We are UK based photography <br\/>agency","action_text":"Learn More","action_url":"#","about_image":"\/static\/about_img_5.jpeg"},"home_sections":[{"id":"Hero","title":"Hero Section","spacing":{"top":{"lg":0,"md":0},"bottom":{"lg":0,"md":0}}},{"id":"FunFact","title":"Fun fact Section","spacing":{"top":{"lg":0,"md":0},"bottom":{"lg":0,"md":0}}},{"id":"Service","title":"Services Section","spacing":{"top":{"lg":"150","md":"80"},"bottom":{"lg":0,"md":0}}},{"id":"Portfolio","title":"Portfolio Section","spacing":{"top":{"lg":"150","md":"80"},"bottom":{"lg":0,"md":0}}},{"id":"Award","title":"Award Section","spacing":{"top":{"lg":"150","md":"80"},"bottom":{"lg":0,"md":0}}},{"id":"Video","title":"Video Section","spacing":{"top":{"lg":"130","md":"70"},"bottom":{"lg":0,"md":0}}},{"id":"Team","title":"Team Section","spacing":{"top":{"lg":"145","md":"80"},"bottom":{"lg":0,"md":0}}},{"id":"Testimonial","title":"Testimonial Section","spacing":{"top":{"lg":"150","md":"80"},"bottom":{"lg":0,"md":0}}},{"id":"Blog","title":"Blog Section","spacing":{"top":{"lg":"150","md":"80"},"bottom":{"lg":0,"md":0}}},{"id":"MovingText","title":"Moving Text Section","spacing":{"top":{"lg":"125","md":"70"},"bottom":{"lg":0,"md":0}}},{"id":"Partner","title":"Partner Section","spacing":{"top":{"lg":"105","md":"70"},"bottom":{"lg":0,"md":0}}},{"id":"CTA","title":"CTA Section","spacing":{"top":{"lg":"150","md":"80"},"bottom":{"lg":0,"md":0}}}],"why_choose_us":{"title":"Highly experienced pepole with us","sub_title":"Why Choose Us","description":"This is the main factor that sets us apart from our competition and allows us to deliver a specialist business consultancy service. Our team applies its wide-ranging experience to determining. Through our years of experience, we\u2019ve also learned that while each channel.This is the main factor that sets us apart from our competition and allows us to deliver a specialist business consultancy service. Our team applies its wide-ranging experience to determining.","image":"\/storage\/pages\/W36HeJlhRELdASQcXhtyoO4EYd6cc7VNizphjWsO.jpg"},"faq_section":{"layout":"2","title":"Some pre questions and answers","sub_title":"FAQ\u2019s","categories":[{"name":"Service related","url":"#"},{"name":"Pricing","url":"#"},{"name":"Project delivery","url":"#"},{"name":"Documentation","url":"#"}],"faqs":[{"questions":"Do you design illustration website?","answers":"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesent voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui."},{"questions":"Do you provide design source file after finish work?","answers":"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesent voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui."},{"questions":"How to provide project details and payments?","answers":"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesent voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui."},{"questions":"Can you tell me please how to contact for project?","answers":"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesent voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui."},{"questions":"Do you makes custom logo, icon etc?","answers":"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesent voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui."}]},"sections_data":[]}']);
        Page::create(['title' => 'About', 'slug' => 'about', 'type' => 'custom', 'sections' => '[]', 'sections_data' => '{"hero_section":{"layout":"1","title":"Creativity In Our Blood Line","sub_title":"We deliver best problem solving solution for our client and provide finest finishing product in present and upcoming future.","action_text":"Get a Quote","background_image_url":"\/static\/hero_bg.jpeg","action_url":"https:\/\/google.com","social_links":{"title":"Follow Us","links":[{"title":"Facebook","url":"https:\/\/facebook.com"},{"title":"Twitter","url":"https:\/\/twitter.com"},{"title":"Instagram","url":"https:\/\/instagram.com"}]},"email_address":"mahadicreation@gmail.com","phone_number":"01722285902","photography_slider":[{"title":"Wedding","imageUrl":"\/static\/wedding.jpeg","href":"\/service\/service-details"},{"title":"Fashion","imageUrl":"\/static\/fashion.jpeg","href":"\/service\/service-details"},{"title":"Commercial","imageUrl":"\/static\/commercial.jpeg","href":"\/service\/service-details"},{"title":"Landscape","imageUrl":"\/static\/landscape.jpeg","href":"\/service\/service-details"}]},"our_fun_fact_section":{"layout":"1","title":"Our fun fact","sub_title":"Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.","background_color":"linear-gradient(267.18deg, #161616 0%, #080808 100%)","fun_facts":[{"title":"Global Happy Clients","value":"40K"},{"title":"Project Completed","value":"50K"},{"title":"Team Members","value":"245"},{"title":"Digital products","value":"550"}]},"service_section":{"layout":"1","title":"Services we can help you with","sub_title":"What Can We Do","action_text":"See All Services","action_url":"#"},"portfolio_section":{"layout":"1","title":"Portfolio to explore","sub_title":"Latest Projects","action_text":"See Details"},"award_section":{"title":"We get multiple awards","sub_title":"Our Awards","items":[{"year":2019,"title":"Google awards","list_item":["Website of the day","Mobile exelence"]},{"year":2019,"title":"Google awards","list_item":["Website of the day","Mobile exelence"]},{"year":2019,"title":"Google awards","list_item":["Website of the day","Mobile exelence"]},{"year":2019,"title":"Google awards","list_item":["Website of the day","Mobile exelence"]},{"year":2019,"title":"Google awards","list_item":["Website of the day","Mobile exelence"]},{"year":2019,"title":"Google awards","list_item":["Website of the day","Mobile exelence"]},{"year":2019,"title":"Google awards","list_item":["Website of the day","Mobile exelence"]},{"year":2019,"title":"Google awards","list_item":["Website of the day","Mobile exelence"]}]},"video_section":{"layout":"1","title":"Our agile process is ability to adapt and respond to change. Agile organizations view change as an opportunity, not a threat.","sub_title":null,"thumbnail_image_url":"\/storage\/pages\/wYjjBk9E0u24fDxWuEtuR4I59nBDzUDwj3YfGuRT.jpg","video_url":"https:\/\/www.youtube.com\/watch?v=rIfdg_Ot-LI","action_text":"Learn more","action_url":null},"our_team_section":{"title":"Awesome team members","sub_title":"Our team"},"testimonial_section":[],"our_blog":{"layout":"1","title":"Explore recent publication","sub_title":"Our Blog","action_text":"View More Blog"},"moving_text_section":{"text":"Our reputed world wide partners"},"partner_section":{"layout":"1","title":"Top Clients","sub_title":"Our reputed partner","logos":["\/static\/partner_1.svg","\/static\/partner_2.svg","\/static\/partner_3.svg","\/static\/partner_4.svg","\/static\/partner_5.svg"]},"cta_section":{"title":"Let\u2019s disscuse make <br \/>something <i>cool<\/i> together","background_image_url":"\/storage\/pages\/K2gbQWuWCaCgRnt2LRfB19E0OM9VuOhR8cvu2rHP.jpg","action_text":"Apply For Metting","action_url":"#"},"pricing_section":{"title":"Pricing & Packaging","sub_title":"Providing best pricing for client","currency_symbol":"$","plans":[{"name":"Standard","price":{"monthly":10,"yearly":10},"features":["Static responsive website","Video marketing","Keywords research","Facebook campaign","eCommerce solution","Google adword"],"action_text":"Purchase Now","action_url":"#"},{"name":"Professional","price":{"monthly":99,"yearly":199},"features":["Static responsive website","Video marketing","Keywords research","Facebook campaign","eCommerce solution","Google adword"],"action_text":"Purchase Now","action_url":"#"},{"name":"Ultimate","price":{"monthly":199,"yearly":299},"features":["Static responsive website","Video marketing","Keywords research","Facebook campaign","eCommerce solution","Google adword"],"action_text":"Purchase Now","action_url":"#"}]},"contact_section":{"layout":"2","title":"Contact Us","sub_title":"Getting touch","action_button_text":"Send Message","map_iframe_url":"https:\/\/www.google.com\/maps\/embed?pb=!1m18!1m12!1m3!1d96652.27317354927!2d-74.33557928194516!3d40.79756494697628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3a82f1352d0dd%3A0x81d4f72c4435aab5!2sTroy+Meadows+Wetlands!5e0!3m2!1sen!2sbd!4v1563075599994!5m2!1sen!2sbd","phone_number":"+44 454 7800 112","email_address":"infotech@arino.com","address":"50 Wall Street Suite, 44150 Ohio, United States"},"case_study_section":{"title":"Case Study","sub_title":"Featured case study"},"about_section":{"layout":"1","description":"This is the main factor that sets us apart from our competition and allows us to deliver a specialist business consultancy service. Our team applies its wide-ranging experience to determining. Through our years of experience, we\u2019ve also learned that while each channel.","photos":["\/storage\/pages\/5TQUCyH6qAyEHyjd31J3BIEEyBgpgXzwBvcUUsJw.jpg","\/storage\/pages\/OtkldinvaxOaXIUTfXcSkyu5hPFatPnu9NMtKvFh.jpg","\/storage\/pages\/FnGfSsgABe4ruPpsoSZJBrfdwGO6SVgTNglLdWRV.jpg"],"title":"About Us","sub_title":"We are UK based photography <br\/>agency","action_text":"Learn More","action_url":"#","about_image":"\/static\/about_img_5.jpeg"},"home_sections":[{"id":"Hero","title":"Hero Section","spacing":{"top":{"lg":0,"md":0},"bottom":{"lg":0,"md":0}}},{"id":"FunFact","title":"Fun fact Section","spacing":{"top":{"lg":0,"md":0},"bottom":{"lg":0,"md":0}}},{"id":"Service","title":"Services Section","spacing":{"top":{"lg":"150","md":"80"},"bottom":{"lg":0,"md":0}}},{"id":"Portfolio","title":"Portfolio Section","spacing":{"top":{"lg":"150","md":"80"},"bottom":{"lg":0,"md":0}}},{"id":"Award","title":"Award Section","spacing":{"top":{"lg":"150","md":"80"},"bottom":{"lg":0,"md":0}}},{"id":"Video","title":"Video Section","spacing":{"top":{"lg":"130","md":"70"},"bottom":{"lg":0,"md":0}}},{"id":"Team","title":"Team Section","spacing":{"top":{"lg":"145","md":"80"},"bottom":{"lg":0,"md":0}}},{"id":"Testimonial","title":"Testimonial Section","spacing":{"top":{"lg":"150","md":"80"},"bottom":{"lg":0,"md":0}}},{"id":"Blog","title":"Blog Section","spacing":{"top":{"lg":"150","md":"80"},"bottom":{"lg":0,"md":0}}},{"id":"MovingText","title":"Moving Text Section","spacing":{"top":{"lg":"125","md":"70"},"bottom":{"lg":0,"md":0}}},{"id":"Partner","title":"Partner Section","spacing":{"top":{"lg":"105","md":"70"},"bottom":{"lg":0,"md":0}}},{"id":"CTA","title":"CTA Section","spacing":{"top":{"lg":"150","md":"80"},"bottom":{"lg":0,"md":0}}}],"why_choose_us":{"title":"Highly experienced pepole with us","sub_title":"Why Choose Us","description":"This is the main factor that sets us apart from our competition and allows us to deliver a specialist business consultancy service. Our team applies its wide-ranging experience to determining. Through our years of experience, we\u2019ve also learned that while each channel.This is the main factor that sets us apart from our competition and allows us to deliver a specialist business consultancy service. Our team applies its wide-ranging experience to determining.","image":"\/storage\/pages\/W36HeJlhRELdASQcXhtyoO4EYd6cc7VNizphjWsO.jpg"},"faq_section":{"layout":"2","title":"Some pre questions and answers","sub_title":"FAQ\u2019s","categories":[{"name":"Service related","url":"#"},{"name":"Pricing","url":"#"},{"name":"Project delivery","url":"#"},{"name":"Documentation","url":"#"}],"faqs":[{"questions":"Do you design illustration website?","answers":"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesent voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui."},{"questions":"Do you provide design source file after finish work?","answers":"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesent voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui."},{"questions":"How to provide project details and payments?","answers":"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesent voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui."},{"questions":"Can you tell me please how to contact for project?","answers":"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesent voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui."},{"questions":"Do you makes custom logo, icon etc?","answers":"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesent voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui."}]},"sections_data":[]}']);
        Page::create(['title' => 'Contact', 'slug' => 'contact', 'type' => 'custom', 'sections' => '[]', 'sections_data' => '{"hero_section":{"layout":"1","title":"Creativity In Our Blood Line","sub_title":"We deliver best problem solving solution for our client and provide finest finishing product in present and upcoming future.","action_text":"Get a Quote","background_image_url":"\/static\/hero_bg.jpeg","action_url":"https:\/\/google.com","social_links":{"title":"Follow Us","links":[{"title":"Facebook","url":"https:\/\/facebook.com"},{"title":"Twitter","url":"https:\/\/twitter.com"},{"title":"Instagram","url":"https:\/\/instagram.com"}]},"email_address":"mahadicreation@gmail.com","phone_number":"01722285902","photography_slider":[{"title":"Wedding","imageUrl":"\/static\/wedding.jpeg","href":"\/service\/service-details"},{"title":"Fashion","imageUrl":"\/static\/fashion.jpeg","href":"\/service\/service-details"},{"title":"Commercial","imageUrl":"\/static\/commercial.jpeg","href":"\/service\/service-details"},{"title":"Landscape","imageUrl":"\/static\/landscape.jpeg","href":"\/service\/service-details"}]},"our_fun_fact_section":{"layout":"1","title":"Our fun fact","sub_title":"Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.","background_color":"linear-gradient(267.18deg, #161616 0%, #080808 100%)","fun_facts":[{"title":"Global Happy Clients","value":"40K"},{"title":"Project Completed","value":"50K"},{"title":"Team Members","value":"245"},{"title":"Digital products","value":"550"}]},"service_section":{"layout":"1","title":"Services we can help you with","sub_title":"What Can We Do","action_text":"See All Services","action_url":"#"},"portfolio_section":{"layout":"1","title":"Portfolio to explore","sub_title":"Latest Projects","action_text":"See Details"},"award_section":{"title":"We get multiple awards","sub_title":"Our Awards","items":[{"year":2019,"title":"Google awards","list_item":["Website of the day","Mobile exelence"]},{"year":2019,"title":"Google awards","list_item":["Website of the day","Mobile exelence"]},{"year":2019,"title":"Google awards","list_item":["Website of the day","Mobile exelence"]},{"year":2019,"title":"Google awards","list_item":["Website of the day","Mobile exelence"]},{"year":2019,"title":"Google awards","list_item":["Website of the day","Mobile exelence"]},{"year":2019,"title":"Google awards","list_item":["Website of the day","Mobile exelence"]},{"year":2019,"title":"Google awards","list_item":["Website of the day","Mobile exelence"]},{"year":2019,"title":"Google awards","list_item":["Website of the day","Mobile exelence"]}]},"video_section":{"layout":"1","title":"Our agile process is ability to adapt and respond to change. Agile organizations view change as an opportunity, not a threat.","sub_title":null,"thumbnail_image_url":"\/storage\/pages\/wYjjBk9E0u24fDxWuEtuR4I59nBDzUDwj3YfGuRT.jpg","video_url":"https:\/\/www.youtube.com\/watch?v=rIfdg_Ot-LI","action_text":"Learn more","action_url":null},"our_team_section":{"title":"Awesome team members","sub_title":"Our team"},"testimonial_section":[],"our_blog":{"layout":"1","title":"Explore recent publication","sub_title":"Our Blog","action_text":"View More Blog"},"moving_text_section":{"text":"Our reputed world wide partners"},"partner_section":{"layout":"1","title":"Top Clients","sub_title":"Our reputed partner","logos":["\/static\/partner_1.svg","\/static\/partner_2.svg","\/static\/partner_3.svg","\/static\/partner_4.svg","\/static\/partner_5.svg"]},"cta_section":{"title":"Let\u2019s disscuse make <br \/>something <i>cool<\/i> together","background_image_url":"\/storage\/pages\/K2gbQWuWCaCgRnt2LRfB19E0OM9VuOhR8cvu2rHP.jpg","action_text":"Apply For Metting","action_url":"#"},"pricing_section":{"title":"Pricing & Packaging","sub_title":"Providing best pricing for client","currency_symbol":"$","plans":[{"name":"Standard","price":{"monthly":10,"yearly":10},"features":["Static responsive website","Video marketing","Keywords research","Facebook campaign","eCommerce solution","Google adword"],"action_text":"Purchase Now","action_url":"#"},{"name":"Professional","price":{"monthly":99,"yearly":199},"features":["Static responsive website","Video marketing","Keywords research","Facebook campaign","eCommerce solution","Google adword"],"action_text":"Purchase Now","action_url":"#"},{"name":"Ultimate","price":{"monthly":199,"yearly":299},"features":["Static responsive website","Video marketing","Keywords research","Facebook campaign","eCommerce solution","Google adword"],"action_text":"Purchase Now","action_url":"#"}]},"contact_section":{"layout":"2","title":"Contact Us","sub_title":"Getting touch","action_button_text":"Send Message","map_iframe_url":"https:\/\/www.google.com\/maps\/embed?pb=!1m18!1m12!1m3!1d96652.27317354927!2d-74.33557928194516!3d40.79756494697628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3a82f1352d0dd%3A0x81d4f72c4435aab5!2sTroy+Meadows+Wetlands!5e0!3m2!1sen!2sbd!4v1563075599994!5m2!1sen!2sbd","phone_number":"+44 454 7800 112","email_address":"infotech@arino.com","address":"50 Wall Street Suite, 44150 Ohio, United States"},"case_study_section":{"title":"Case Study","sub_title":"Featured case study"},"about_section":{"layout":"1","description":"This is the main factor that sets us apart from our competition and allows us to deliver a specialist business consultancy service. Our team applies its wide-ranging experience to determining. Through our years of experience, we\u2019ve also learned that while each channel.","photos":["\/storage\/pages\/5TQUCyH6qAyEHyjd31J3BIEEyBgpgXzwBvcUUsJw.jpg","\/storage\/pages\/OtkldinvaxOaXIUTfXcSkyu5hPFatPnu9NMtKvFh.jpg","\/storage\/pages\/FnGfSsgABe4ruPpsoSZJBrfdwGO6SVgTNglLdWRV.jpg"],"title":"About Us","sub_title":"We are UK based photography <br\/>agency","action_text":"Learn More","action_url":"#","about_image":"\/static\/about_img_5.jpeg"},"home_sections":[{"id":"Hero","title":"Hero Section","spacing":{"top":{"lg":0,"md":0},"bottom":{"lg":0,"md":0}}},{"id":"FunFact","title":"Fun fact Section","spacing":{"top":{"lg":0,"md":0},"bottom":{"lg":0,"md":0}}},{"id":"Service","title":"Services Section","spacing":{"top":{"lg":"150","md":"80"},"bottom":{"lg":0,"md":0}}},{"id":"Portfolio","title":"Portfolio Section","spacing":{"top":{"lg":"150","md":"80"},"bottom":{"lg":0,"md":0}}},{"id":"Award","title":"Award Section","spacing":{"top":{"lg":"150","md":"80"},"bottom":{"lg":0,"md":0}}},{"id":"Video","title":"Video Section","spacing":{"top":{"lg":"130","md":"70"},"bottom":{"lg":0,"md":0}}},{"id":"Team","title":"Team Section","spacing":{"top":{"lg":"145","md":"80"},"bottom":{"lg":0,"md":0}}},{"id":"Testimonial","title":"Testimonial Section","spacing":{"top":{"lg":"150","md":"80"},"bottom":{"lg":0,"md":0}}},{"id":"Blog","title":"Blog Section","spacing":{"top":{"lg":"150","md":"80"},"bottom":{"lg":0,"md":0}}},{"id":"MovingText","title":"Moving Text Section","spacing":{"top":{"lg":"125","md":"70"},"bottom":{"lg":0,"md":0}}},{"id":"Partner","title":"Partner Section","spacing":{"top":{"lg":"105","md":"70"},"bottom":{"lg":0,"md":0}}},{"id":"CTA","title":"CTA Section","spacing":{"top":{"lg":"150","md":"80"},"bottom":{"lg":0,"md":0}}}],"why_choose_us":{"title":"Highly experienced pepole with us","sub_title":"Why Choose Us","description":"This is the main factor that sets us apart from our competition and allows us to deliver a specialist business consultancy service. Our team applies its wide-ranging experience to determining. Through our years of experience, we\u2019ve also learned that while each channel.This is the main factor that sets us apart from our competition and allows us to deliver a specialist business consultancy service. Our team applies its wide-ranging experience to determining.","image":"\/storage\/pages\/W36HeJlhRELdASQcXhtyoO4EYd6cc7VNizphjWsO.jpg"},"faq_section":{"layout":"2","title":"Some pre questions and answers","sub_title":"FAQ\u2019s","categories":[{"name":"Service related","url":"#"},{"name":"Pricing","url":"#"},{"name":"Project delivery","url":"#"},{"name":"Documentation","url":"#"}],"faqs":[{"questions":"Do you design illustration website?","answers":"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesent voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui."},{"questions":"Do you provide design source file after finish work?","answers":"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesent voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui."},{"questions":"How to provide project details and payments?","answers":"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesent voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui."},{"questions":"Can you tell me please how to contact for project?","answers":"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesent voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui."},{"questions":"Do you makes custom logo, icon etc?","answers":"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesent voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui."}]},"sections_data":[]}']);
        Page::create(['title' => 'Frequently Asked Questions', 'slug' => 'faq', 'type' => 'custom', 'sections' => '[]', 'sections_data' => '{"hero_section":{"layout":"1","title":"Creativity In Our Blood Line","sub_title":"We deliver best problem solving solution for our client and provide finest finishing product in present and upcoming future.","action_text":"Get a Quote","background_image_url":"\/static\/hero_bg.jpeg","action_url":"https:\/\/google.com","social_links":{"title":"Follow Us","links":[{"title":"Facebook","url":"https:\/\/facebook.com"},{"title":"Twitter","url":"https:\/\/twitter.com"},{"title":"Instagram","url":"https:\/\/instagram.com"}]},"email_address":"mahadicreation@gmail.com","phone_number":"01722285902","photography_slider":[{"title":"Wedding","imageUrl":"\/static\/wedding.jpeg","href":"\/service\/service-details"},{"title":"Fashion","imageUrl":"\/static\/fashion.jpeg","href":"\/service\/service-details"},{"title":"Commercial","imageUrl":"\/static\/commercial.jpeg","href":"\/service\/service-details"},{"title":"Landscape","imageUrl":"\/static\/landscape.jpeg","href":"\/service\/service-details"}]},"our_fun_fact_section":{"layout":"1","title":"Our fun fact","sub_title":"Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.","background_color":"linear-gradient(267.18deg, #161616 0%, #080808 100%)","fun_facts":[{"title":"Global Happy Clients","value":"40K"},{"title":"Project Completed","value":"50K"},{"title":"Team Members","value":"245"},{"title":"Digital products","value":"550"}]},"service_section":{"layout":"1","title":"Services we can help you with","sub_title":"What Can We Do","action_text":"See All Services","action_url":"#"},"portfolio_section":{"layout":"1","title":"Portfolio to explore","sub_title":"Latest Projects","action_text":"See Details"},"award_section":{"title":"We get multiple awards","sub_title":"Our Awards","items":[{"year":2019,"title":"Google awards","list_item":["Website of the day","Mobile exelence"]},{"year":2019,"title":"Google awards","list_item":["Website of the day","Mobile exelence"]},{"year":2019,"title":"Google awards","list_item":["Website of the day","Mobile exelence"]},{"year":2019,"title":"Google awards","list_item":["Website of the day","Mobile exelence"]},{"year":2019,"title":"Google awards","list_item":["Website of the day","Mobile exelence"]},{"year":2019,"title":"Google awards","list_item":["Website of the day","Mobile exelence"]},{"year":2019,"title":"Google awards","list_item":["Website of the day","Mobile exelence"]},{"year":2019,"title":"Google awards","list_item":["Website of the day","Mobile exelence"]}]},"video_section":{"layout":"1","title":"Our agile process is ability to adapt and respond to change. Agile organizations view change as an opportunity, not a threat.","sub_title":null,"thumbnail_image_url":"\/storage\/pages\/wYjjBk9E0u24fDxWuEtuR4I59nBDzUDwj3YfGuRT.jpg","video_url":"https:\/\/www.youtube.com\/watch?v=rIfdg_Ot-LI","action_text":"Learn more","action_url":null},"our_team_section":{"title":"Awesome team members","sub_title":"Our team"},"testimonial_section":[],"our_blog":{"layout":"1","title":"Explore recent publication","sub_title":"Our Blog","action_text":"View More Blog"},"moving_text_section":{"text":"Our reputed world wide partners"},"partner_section":{"layout":"1","title":"Top Clients","sub_title":"Our reputed partner","logos":["\/static\/partner_1.svg","\/static\/partner_2.svg","\/static\/partner_3.svg","\/static\/partner_4.svg","\/static\/partner_5.svg"]},"cta_section":{"title":"Let\u2019s disscuse make <br \/>something <i>cool<\/i> together","background_image_url":"\/storage\/pages\/K2gbQWuWCaCgRnt2LRfB19E0OM9VuOhR8cvu2rHP.jpg","action_text":"Apply For Metting","action_url":"#"},"pricing_section":{"title":"Pricing & Packaging","sub_title":"Providing best pricing for client","currency_symbol":"$","plans":[{"name":"Standard","price":{"monthly":10,"yearly":10},"features":["Static responsive website","Video marketing","Keywords research","Facebook campaign","eCommerce solution","Google adword"],"action_text":"Purchase Now","action_url":"#"},{"name":"Professional","price":{"monthly":99,"yearly":199},"features":["Static responsive website","Video marketing","Keywords research","Facebook campaign","eCommerce solution","Google adword"],"action_text":"Purchase Now","action_url":"#"},{"name":"Ultimate","price":{"monthly":199,"yearly":299},"features":["Static responsive website","Video marketing","Keywords research","Facebook campaign","eCommerce solution","Google adword"],"action_text":"Purchase Now","action_url":"#"}]},"contact_section":{"layout":"2","title":"Contact Us","sub_title":"Getting touch","action_button_text":"Send Message","map_iframe_url":"https:\/\/www.google.com\/maps\/embed?pb=!1m18!1m12!1m3!1d96652.27317354927!2d-74.33557928194516!3d40.79756494697628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3a82f1352d0dd%3A0x81d4f72c4435aab5!2sTroy+Meadows+Wetlands!5e0!3m2!1sen!2sbd!4v1563075599994!5m2!1sen!2sbd","phone_number":"+44 454 7800 112","email_address":"infotech@arino.com","address":"50 Wall Street Suite, 44150 Ohio, United States"},"case_study_section":{"title":"Case Study","sub_title":"Featured case study"},"about_section":{"layout":"1","description":"This is the main factor that sets us apart from our competition and allows us to deliver a specialist business consultancy service. Our team applies its wide-ranging experience to determining. Through our years of experience, we\u2019ve also learned that while each channel.","photos":["\/storage\/pages\/5TQUCyH6qAyEHyjd31J3BIEEyBgpgXzwBvcUUsJw.jpg","\/storage\/pages\/OtkldinvaxOaXIUTfXcSkyu5hPFatPnu9NMtKvFh.jpg","\/storage\/pages\/FnGfSsgABe4ruPpsoSZJBrfdwGO6SVgTNglLdWRV.jpg"],"title":"About Us","sub_title":"We are UK based photography <br\/>agency","action_text":"Learn More","action_url":"#","about_image":"\/static\/about_img_5.jpeg"},"home_sections":[{"id":"Hero","title":"Hero Section","spacing":{"top":{"lg":0,"md":0},"bottom":{"lg":0,"md":0}}},{"id":"FunFact","title":"Fun fact Section","spacing":{"top":{"lg":0,"md":0},"bottom":{"lg":0,"md":0}}},{"id":"Service","title":"Services Section","spacing":{"top":{"lg":"150","md":"80"},"bottom":{"lg":0,"md":0}}},{"id":"Portfolio","title":"Portfolio Section","spacing":{"top":{"lg":"150","md":"80"},"bottom":{"lg":0,"md":0}}},{"id":"Award","title":"Award Section","spacing":{"top":{"lg":"150","md":"80"},"bottom":{"lg":0,"md":0}}},{"id":"Video","title":"Video Section","spacing":{"top":{"lg":"130","md":"70"},"bottom":{"lg":0,"md":0}}},{"id":"Team","title":"Team Section","spacing":{"top":{"lg":"145","md":"80"},"bottom":{"lg":0,"md":0}}},{"id":"Testimonial","title":"Testimonial Section","spacing":{"top":{"lg":"150","md":"80"},"bottom":{"lg":0,"md":0}}},{"id":"Blog","title":"Blog Section","spacing":{"top":{"lg":"150","md":"80"},"bottom":{"lg":0,"md":0}}},{"id":"MovingText","title":"Moving Text Section","spacing":{"top":{"lg":"125","md":"70"},"bottom":{"lg":0,"md":0}}},{"id":"Partner","title":"Partner Section","spacing":{"top":{"lg":"105","md":"70"},"bottom":{"lg":0,"md":0}}},{"id":"CTA","title":"CTA Section","spacing":{"top":{"lg":"150","md":"80"},"bottom":{"lg":0,"md":0}}}],"why_choose_us":{"title":"Highly experienced pepole with us","sub_title":"Why Choose Us","description":"This is the main factor that sets us apart from our competition and allows us to deliver a specialist business consultancy service. Our team applies its wide-ranging experience to determining. Through our years of experience, we\u2019ve also learned that while each channel.This is the main factor that sets us apart from our competition and allows us to deliver a specialist business consultancy service. Our team applies its wide-ranging experience to determining.","image":"\/storage\/pages\/W36HeJlhRELdASQcXhtyoO4EYd6cc7VNizphjWsO.jpg"},"faq_section":{"layout":"2","title":"Some pre questions and answers","sub_title":"FAQ\u2019s","categories":[{"name":"Service related","url":"#"},{"name":"Pricing","url":"#"},{"name":"Project delivery","url":"#"},{"name":"Documentation","url":"#"}],"faqs":[{"questions":"Do you design illustration website?","answers":"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesent voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui."},{"questions":"Do you provide design source file after finish work?","answers":"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesent voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui."},{"questions":"How to provide project details and payments?","answers":"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesent voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui."},{"questions":"Can you tell me please how to contact for project?","answers":"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesent voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui."},{"questions":"Do you makes custom logo, icon etc?","answers":"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesent voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui."}]},"sections_data":[]}']);
    }
}