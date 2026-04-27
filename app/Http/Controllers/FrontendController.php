<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Review;
use App\Models\Setting;
use DB;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(Request $request)
    {
        $setting = Setting::find(1);
        $reviews = Review::latest()->take(10)->get();
        $categories = Category::all();
        $courses = Course::all();
        $categoryById = Category::select('id', 'name')->pluck('name','id')->toArray();
        return view('frontend.welcome', compact('reviews', 'setting','categories','courses', 'categoryById'));
    }
    public function about()
    {   
        $setting = Setting::find(1);
        $reviews = Review::latest()->take(10)->get();
        return view('frontend.about',compact('setting', 'reviews'));
    }

    public function contact()
    {   
        $setting = Setting::find(1);
        $reviews = Review::latest()->take(10)->get();
        return view('frontend.contact',compact('setting', 'reviews'));
    }
    public function faq()
    {   
        $setting = Setting::find(1);
        $reviews = Review::latest()->take(10)->get();
        return view('frontend.faq',compact('setting', 'reviews'));
    }
    public function policyAndProcedure()
    {   
        $setting = Setting::find(1);
        $reviews = Review::latest()->take(10)->get();
        return view('frontend.policyAndProcedure',compact('setting', 'reviews'));
    }
    public function complaintsAndAppealsPolicy ()
    {   
        $setting = Setting::find(1);
        $reviews = Review::latest()->take(10)->get();
        return view('frontend.complaintsAndAppealsPolicy ',compact('setting', 'reviews'));
    }
    public function learningResourcesPolicy  ()
    {   
        $setting = Setting::find(1);
        $reviews = Review::latest()->take(10)->get();
        return view('frontend.learningResourcesPolicy  ',compact('setting', 'reviews'));
    }
    public function reassessmentPolicy()
    {   
        $setting = Setting::find(1);
        $reviews = Review::latest()->take(10)->get();
        return view('frontend.reassessmentPolicy',compact('setting', 'reviews'));
    }
    public function scheduleOfAdministrativeFees()
    {   
        $setting = Setting::find(1);
        $reviews = Review::latest()->take(10)->get();
        return view('frontend.scheduleOfAdministrativeFees',compact('setting', 'reviews'));
    }
    public function refundCancellationPolicy()
    {   
        $setting = Setting::find(1);
        $reviews = Review::latest()->take(10)->get();
        return view('frontend.refundCancellationPolicy',compact('setting', 'reviews'));
    }
    public function enrolment()
    {   
        $setting = Setting::find(1);
        $reviews = Review::latest()->take(10)->get();
        return view('frontend.enrolment',compact('setting', 'reviews'));
    }
    public function courseList()
    {   
        $setting = Setting::find(1);
        $reviews = Review::latest()->take(10)->get();
        $courses = Course::all();
        $categories = Category::all();
        return view('frontend.course',compact('setting', 'reviews','courses','categories'));
    }
    public function singleCategory($id)
    {   
        $setting = Setting::find(1);
        $category = Category::find($id);
        $courses = Course::where('category_id', $id)->get();
        return view('frontend.single-category', compact('setting','category','courses'));
    }
    public function singleCourse($id)
    {   
        $setting = Setting::find(1);
        $course = Course::find($id);
        $categoryById = Category::select('id', 'name')->pluck('name','id')->toArray();
        return view('frontend.course-details', compact('setting','course','categoryById'));
    }
    public function workPlacement()
    {   
        $setting = Setting::find(1);
        $reviews = Review::latest()->take(10)->get();
        return view('frontend.work-placement', compact('setting','reviews'));
    }
    public function individualSupport()
    {   
        $setting = Setting::find(1);
        $reviews = Review::latest()->take(10)->get();
        return view('frontend.individual-support', compact('setting','reviews'));
    }
    public function ageingSupport()
    {   
        $setting = Setting::find(1);
        $reviews = Review::latest()->take(10)->get();
        return view('frontend.ageing-support', compact('setting','reviews'));
    }
    public function disabilitySupport()
    {   
        $setting = Setting::find(1);
        $reviews = Review::latest()->take(10)->get();
        return view('frontend.disability-support', compact('setting','reviews'));
    }
    public function communityService()
    {   
        $setting = Setting::find(1);
        $reviews = Review::latest()->take(10)->get();
        return view('frontend.community-service', compact('setting','reviews'));
    }
    public function communityServices()
    {   
        $setting = Setting::find(1);
        $reviews = Review::latest()->take(10)->get();
        return view('frontend.community-services', compact('setting','reviews'));
    }
    public function cardiopulmonaryResuscitation()
    {   
        $setting = Setting::find(1);
        $reviews = Review::latest()->take(10)->get();
        return view('frontend.cardiopulmonary-resuscitation', compact('setting','reviews'));
    }
    public function firstAidCpr()
    {   
        $setting = Setting::find(1);
        $reviews = Review::latest()->take(10)->get();
        return view('frontend.first-aid-cpr', compact('setting','reviews'));
    }
    public function leadershipManagement()
    {   
        $setting = Setting::find(1);
        $reviews = Review::latest()->take(10)->get();
        return view('frontend.leadership-management', compact('setting','reviews'));
    }
    public function projectManagement()
    {   
        $setting = Setting::find(1);
        $reviews = Review::latest()->take(10)->get();
        return view('frontend.project-management', compact('setting','reviews'));
    }

     public function meta_page()
    {
       return view('frontend.meta-page');
    }

    
    public function application()
    {   
        $countries = [
            'Adelie Land (France)',
            'Afghanistan',
            'Aland Islands',
            'Albania',
            'Algeria',
            'Andorra',
            'Angola',
            'Anguilla',
            'Antigua and Barbuda',
            'Argentina',
            'Argentinian Antarctic Territory',
            'Armenia',
            'Aruba',
            'Australia',
            'Austria',
            'Azerbaijan',
            'Bahamas',
            'Bahrain',
            'Bangladesh',
            'Barbados',
            'Belarus',
            'Belgium',
            'Belize',
            'Benin',
            'Bermuda',
            'Bhutan',
            'Bolivia',
            'Brazil',
            'Canada',
            'China',
            'Denmark',
            'Egypt',
            'France',
            'Germany',
            'India',
            'Indonesia',
            'Italy',
            'Japan',
            'Malaysia',
            'Maldives',
            'Nepal',
            'Netherlands',
            'New Zealand',
            'Norway',
            'Pakistan',
            'Qatar',
            'Saudi Arabia',
            'Singapore',
            'South Africa',
            'Sri Lanka',
            'Sweden',
            'Switzerland',
            'Thailand',
            'Turkey',
            'United Arab Emirates',
            'United Kingdom',
            'United States of America',
            'Vietnam',
            'Zimbabwe',
        ];
        $languages = [
            'Aboriginal English, so described',
            'Acehnese',
            'Acholi',
            'Adnymathantha',
            'African Languages, nec',
            'Afrikaans',
            'Akan',
            'Alawa',
            'Albanian',
            'Alngith',
            'Alyawarr',
            'American Languages',
            'Amharic',
            'Amurdak',
            'Anindilyakwa',
            'Anmatyerr',
            'Anmatyerr, nec',
            'Antekerrepenh',
            'Antikarinya',
            'Anuak',
            'Arabana',
            'Arabic',
            'Arandic, nec',
            'Armenian',
            'Arnhem Land and Daly River Region Languages, nec',
            'Aromunian (Macedo-Romanian)',
            'Arrernte',
            'Arrernte, nec',
            'Assamese',
            'Assyrian Neo-Aramaic',
            'Auslan',
            'Azeri',
            'Baanbay',
            'Badimaya',
            'Balinese',
            'Balochi',
            'Bandjalang',
            'Banyjima',
            'Barababaraba',
            'Bardi',
            'Bari',
            'Basque',
            'Bassa',
            'Batjala',
            'Belorussian',
            'Bemba',
            'Bengali',
            'Bidjara',
            'Bikol',
            'Bilinarra',
            'Bisaya',
            'Bislama',
            'Bosnian',
            'Bulgarian',
            'Bunuba',
            'Burarra',
            'Burarran',
            'Burarran, nec',
            'Burmese',
            'Burmese and Related Languages, nec',
            'Cantonese',
            'Cape York Peninsula Languages, nec',
            'Catalan',
            'Cebuano',
            'Celtic, nec',
            'Central Anmatyerr',
            'Chaldean Neo-Aramaic',
            'Chin Haka',
            'Chinese, nec',
            'Creole, nfd',
            'Croatian',
            'Cypriot, so described',
            'Czech',
            'Czechoslovakian, so described',
            'Daatiwuy',
            'Dadi Dadi',
            'Dalabon',
            'Dan (Gio-Dan)',
            'Danish',
            'Dari',
            'Dhalwangu',
            'Dhanggatti',
            'Dhangu',
            'Dhangu, nec',
            'Dharawal',
            'Dhivehi',
            'Dhuwal',
            'Dhuwal, nec',
            'Dhuwala',
            'Dhuwala, nec',
            'Dhuwaya',
            'Dinka',
            'Diyari',
            'Djabugay',
            'Djabwurrung',
            'Djambarrpuyngu',
            'Djangu',
            'Djapu',
            'Djarrwark',
            'Djinang',
            'Djinang, nec',
            'Djinba',
            'Djinba, nec',
            'Dravidian, nec',
            'Dutch',
            'Dyirbal',
            'Dzongkha',
            'Eastern Anmatyerr',
            'Eastern Arrernte',
            'English',
            'Estonian',
            'Ewe',
            'Fijian',
            'Fijian Hindustani',
            'Filipino',
            'Finnish',
            'Finnish and Related Languages, nec',
            'French',
            'French Creole, nfd',
            'Frisian',
            'Fulfulde',
            'Ga',
            'Gaelic (Scotland)',
            'Galpu',
            'Gambera',
            'Gamilaraay',
            'Ganalbingu',
            'Garrwa',
            'Garuwali',
            'Georgian',
            'German',
            'Gilbertese',
            'Girramay',
            'Githabul',
            'Golumala',
            'Gooniyandi',
            'Greek',
            'Gudanji',
            'Gudjal',
            'Gujarati',
            'Gumatj',
            'Gumbaynggir',
            'Gundjeihmi',
            'Gun-nartpa',
            'Gupapuyngu',
            'Gurindji',
            'Gurindji Kriol',
            'Gurr-goni',
            'Guugu Yimidhirr',
            'Guyamirrilili',
            'Hakka',
            'Harari',
            'Hausa',
            'Hawaiian English',
            'Hazaraghi',
            'Hebrew',
            'Hindi',
            'Hmong',
            'Hmong-Mien, nec',
            'Hungarian',
            'Iban',
            'Iberian Romance, nec',
            'Icelandic',
            'Igbo',
            'IIokano',
            'Ilonggo (Hiligaynon)',
            'Indo-Aryan, nec',
            'Indonesian',
            'Invented Languages',
            'Iranic, nec',
            'Irish',
            'Italian',
            'Iwaidja',
            'Jaminjung',
            'Japanese',
            'Jaru',
            'Javanese',
            'Jawi',
            'Jawoyn',
            'Jingulu',
            'Kalaw Kawaw Ya/Kalaw Lagaw Ya',
            'Kanai',
            'Kannada',
            'Karajarri',
            'Karen',
            'Kariyarra',
            'Kartujarra',
            'Kashmiri',
            'Kaurna',
            'Kayardild',
            'Kaytetye',
            'Keerray-Woorroong',
            'Key Word Sign Australia',
            'Khmer',
            'Kija',
            'Kikuyu',
            'Kimberley Area Languages, nec',
            'Kinyarwanda (Rwanda)',
            'Kirundi (Rundi)',
            'Kiwai',
            'Koko-Bera',
            'Konkani',
            'Korean',
            'Kpelle',
            'Krahn',
            'Krio',
            'Kriol',
            'Kugu Muminh',
            'Kukatha',
            'Kukatja',
            'Kuku Yalanji',
            'Kunbarlang',
            'Kune',
            'Kuninjku',
            'Kunwinjku',
            'Kunwinjkuan',
            'Kunwinjkuan, nec',
            'Kurdish',
            'Kuuk Thayorre',
            'Kuwema',
            'Ladji Ladji',
            'Lamalama',
            'Lao',
            'Lardil',
            'Larrakiya',
            'Latin',
            'Latvian',
            'Letzeburgish',
            'Liberian (Liberian English)',
            'Light Warlpiri',
            'Lingala',
            'Lithuanian',
            'Liyagalawumirr',
            'Liyagawumirr',
            'Loma (Lorma)',
            'Luganda',
            'Lumun (Kuku Lumun)',
            'Luo',
            'Luritja',
            'Macedonian',
            'Madarrpa',
            'Madi',
            'Malak Malak',
            'Malay',
            'Malayalam',
            'Malngin',
            'Maltese',
            'Mandaean (Mandaic)',
            'Mandarin',
            'Mandinka',
            'Mangala',
            'Mangarrayi',
            'Manggalili',
            'Mann',
            'Manyjalpingu',
            'Manyjilyjarra',
            'Maori (Cook Island)',
            'Maori (New Zealand)',
            'Marathi',
            'Maringarr',
            'Marra',
            'Marramaninyshi',
            'Marrangu',
            'Marridan (Maridan)',
            'Marrithiyel',
            'Martu Wangka',
            'Matngala',
            'Maung',
            'Mauritian Creole',
            'Mayali',
            'Meriam Mir',
            'Middle Eastern Semitic Languages, nec',
            'Min Nan',
            'Miriwoong',
            'Mirning',
            'Mon',
            'Mongolian',
            'Mon-Khmer, nec',
            'Moro (Nuba Moro)',
            'Morrobalama',
            'Motu (HiriMotu)',
            'Mudburra',
            'Murrinh Patha',
            'Muruwari',
            'Na-kara',
            'Narungga',
            'Nauruan',
            'Ndebele',
            'Ndjébbana (Gunavidji)',
            'Nepali',
            'Ngaanyatjarra',
            'Ngalakgan',
            'Ngaliwurru',
            'Ngandi',
            'Ngardi',
            'Ngarinyin',
            'Ngarinyman',
            'Ngarluma',
            'Ngarrindjeri',
            'Ngatjumaya',
            'Nhangu',
            'Nhangu, nec',
            'Niue',
            'Non verbal',
            'Northern Desert Fringe Area Languages, nec',
            'Norwegian',
            'not specified',
            'Nuer',
            'Nungali',
            'Nunggubuyu',
            'Nyamal',
            'Nyangumarta',
            'Nyanja (Chichewa)',
            'Nyikina',
            'Nyungar',
            'Oceanian Pidgins and Creoles, nec',
            'Oriya',
            'Oromo',
            'Other Australian Indigenous Languages, nec',
            'Other Eastern Asian Languages, nec',
            'Other Eastern European Languages, nec',
            'Other Southeast Asian Languages',
            'Other Southern Asian Languages',
            'Other Southern European Languages, nec',
            'Other Southwest and Central Asian Languages, nec',
            'Other Yolngu Matha',
            'Other Yolngu Matha, nec',
            'Paakantyi',
            'Pacific Austronesian Languages, nec',
            'Palyku/Nyiyaparli',
            'Pampangan',
            'Papua New Guinea Languages, nec',
            'Pashto',
            'Persian (excluding Dari)',
            'Pidgin, nfd',
            'Pintupi',
            'Pitjantjatjara',
            'Polish',
            'Portuguese',
            'Portuguese Creole, nfd',
            'Punjabi',
            'Rembarrnga',
            'Rirratjingu',
            'Ritharrngu',
            'Rohingya',
            'Romanian',
            'Romany',
            'Rotuman',
            'Russian',
            'Samoan',
            'Scandinavian, nec',
            'Serbian',
            'Serbo-Croatian/Yugoslavian, so described',
            'Seychelles Creole',
            'Shilluk',
            'Shona',
            'Sign Languages, nec',
            'Sindhi',
            'Sinhalese',
            'Slovak',
            'Slovene',
            'Solomon Islands Pijin',
            'Somali',
            'Southeast Asian Austronesian Languages, nec',
            'Spanish',
            'Spanish Creole, nfd',
            'Swahili',
            'Swedish',
            'Swiss, so described',
            'Tagalog',
            'Tai, nec',
            'Tamil',
            'Tatar',
            'Telugu',
            'Tetum',
            'Thai',
            'Thaynakwith',
            'Themne',
            'Tibetan',
            'Tigré',
            'Tigrinya',
            'Timorese',
            'Tiwi',
            'Tjungundji',
            'Tjupany',
            'Tok Pisin (Neomelanesian)',
            'Tokelauan',
            'Tongan',
            'Tswana',
            'Tulu',
            'Turkic, nec',
            'Turkish',
            'Turkmen',
            'Tuvaluan',
            'Ukrainian',
            'Urdu',
            'Uygur',
            'Uzbek',
            'Vietnamese',
            'Waanyi',
            'Wagilak',
            'Wagiman',
            'Wajarri',
            'Walmajarri',
            'Waluwarra',
            'Wambaya',
            'Wangkajunga',
            'Wangkangurru',
            'Wangkatha',
            'Wangurri',
            'Wanyjirra',
            'Wardaman',
            'Wargamay',
            'Warlmanpa',
            'Warlpiri',
            'Warnman',
            'Warramiri',
            'Warumungu',
            'Welsh',
            'Wergaia',
            'Western Arrarnta',
            'Western Desert Language, nec',
            'Wik Mungkan',
            'Wik Ngathan',
            'Wiradjuri',
            'Worla',
            'Worrorra',
            'Wu',
            'Wubulkarra',
            'Wunambal',
            'Wurlaki',
            'Xhosa',
            'Yakuy',
            'Yakuy, nec',
            'Yankunytjatjara',
            'Yan-Nhangu',
            'Yanyuwa',
            'Yapese',
            'Yawuru',
            'Yiddish',
            'Yidiny',
            'Yindjibarndi',
            'Yinhawangka',
            'Yorta Yorta',
            'Yoruba',
            'Yugambeh',
            'Yulparija',
            'Yumplatok (Torres Strait Creole)',
            'Yupangathi',
            'Zomi',
            'Zulu'
        ];
        $setting = Setting::find(1);
        $reviews = Review::latest()->take(10)->get();
        return view('frontend.application', compact('setting','reviews', 'countries','languages'));
    }
    public function store(Request $request)
    {   
        // return $request->all();
        try {
            // Validate the request data
            $validatedData = $request->validate([
                'student_type' => 'required|string',
                'title' => 'nullable|string',
                'nickname' => 'nullable|string',
                'first_name' => 'required|string',
                'middle_name' => 'nullable|string',
                'family_name' => 'required|string',
                'gender' => 'required|string',
                'date_of_birth' => 'required|date',
                'email' => 'required|email',
                'birthplace_city' => 'nullable|string',
                'country_of_birth' => 'nullable|string',
                'nationality' => 'nullable|string',
                'identification_no' => 'nullable|string',
                'usi' => 'nullable|string',
                'cd_building_name' => 'nullable|string',
                'cd_flat_unit' => 'nullable|string',
                'cd_street_number' => 'nullable|string',
                'cd_street_name' => 'nullable|string',
                'cd_city' => 'nullable|string',
                'cd_state' => 'nullable|string',
                'cd_postcode' => 'nullable|string',
                'cd_country' => 'nullable|string',
                'cd_primary_contact' => 'nullable|string',
                'cd_alternate_contact' => 'nullable|string',
                'cd_mobile_phone' => 'nullable|string',
                'different_mailing' => 'sometimes|boolean',
                'overseas_address' => 'sometimes|boolean',
                'pa_building_name' => 'nullable|string',
                'pa_flat_unit' => 'nullable|string',
                'pa_street_number' => 'nullable|string',
                'pa_street_name' => 'nullable|string',
                'pa_city' => 'nullable|string',
                'pa_state' => 'nullable|string',
                'pa_postcode' => 'nullable|string',
                'pa_country' => 'nullable|string',
                'pa_primary_contact' => 'nullable|string',
                'pa_alternate_contact' => 'nullable|string',
                'pa_mobile_phone' => 'nullable|string',
                'opa_building_name' => 'nullable|string',
                'opa_flat_unit' => 'nullable|string',
                'opa_street_number' => 'nullable|string',
                'opa_street_name' => 'nullable|string',
                'opa_city' => 'nullable|string',
                'opa_state' => 'nullable|string',
                'opa_postcode' => 'nullable|string',
                'opa_country' => 'nullable|string',
                'opa_primary_contact' => 'nullable|string',
                'opa_alternate_contact' => 'nullable|string',
                'opa_mobile_phone' => 'nullable|string',
                'aboriginal' => 'nullable|string',
                'english_main' => 'nullable|string',
                'main_language' => 'nullable|string',
                'english_instruction' => 'nullable|string',
                'english_test' => 'nullable|string',
                'english_test_type' => 'nullable|string',
                'english_test_date' => 'nullable|date',
                'listening_score' => 'nullable|string',
                'reading_score' => 'nullable|string',
                'writing_score' => 'nullable|string',
                'speaking_score' => 'nullable|string',
                'overall_score' => 'nullable|string',
                'secondary_school_level' => 'nullable|string',
                'still_attending' => 'nullable|string',
                'secondary_school_type' => 'nullable|string',
                'add_qualifications' => 'sometimes|boolean',
                'edu_level' => 'nullable|string',
                'edu_qual_name' => 'nullable|string',
                'edu_school_name' => 'nullable|string',
                'edu_state_country' => 'nullable|string',
                'edu_year_completed' => 'nullable|string',
                'employment_status' => 'nullable|string',
                'add_employment'     => 'sometimes|boolean',
                'employer_name' => 'nullable|string',
                'occupation_title' => 'nullable|string',
                'employment_from' => 'nullable|date',
                'employment_to' => 'nullable|date',
                'employment_duties' => 'nullable|string',
                'disability' => 'nullable|string',
                'impairment[]' => 'nullable',
                'city_of_birth' => 'nullable|string',
                'study_mode' => 'nullable|string',
                'intake_year' => 'nullable|string',
                'course_code' => 'nullable|string',
                'study_type' => 'nullable|string',
                'intake_date' => 'nullable|string',
                'course_location' => 'nullable|string',
                'study_reason' => 'nullable|string',
                'declaration' => 'sometimes|boolean',
                'education_history' => 'nullable|array',
                'employment_history' => 'nullable|array',
                'applied_courses' => 'nullable|array',
                'current_course' => 'nullable|array',
            ]);

            $validatedData['add_employment']     = $request->boolean('add_employment');
            $validatedData['add_qualifications'] = $request->boolean('add_qualifications');
            $validatedData['declaration']        = $request->boolean('declaration');
            $validatedData['different_mailing']  = $request->boolean('different_mailing');
            $validatedData['overseas_address']   = $request->boolean('overseas_address');
            $validatedData['created_at'] = now();
            $validatedData['updated_at'] = now();

            // Convert arrays to JSON for storage
            if (isset($validatedData['education_history'])) {
                $validatedData['education_history'] = json_encode($validatedData['education_history']);
            }
            if (isset($validatedData['employment_history'])) {
                $validatedData['employment_history'] = json_encode($validatedData['employment_history']);
            }
            if (isset($validatedData['applied_courses'])) {
                $validatedData['applied_courses'] = json_encode($validatedData['applied_courses']);
            }
            if (isset($validatedData['current_course'])) {
                $validatedData['current_course'] = json_encode($validatedData['current_course']);
            }

            // Store in database
            $application = DB::table('applications')->insert($validatedData);

            return response()->json([
                'success' => true,
                'message' => 'Application submitted successfully',
                'data' => $request->all()
            ], 201);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}