<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BlogController;
use App\Services\SeoService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $featuredPost = BlogController::getFeaturedPost();
        
        // SEO Data
        $locale = app()->getLocale();
        $seoData = [
            'title' => $locale === 'ar' ? 'الرئيسية - أكاديمية إلم كورنر' : 'Home - ElmCorner Online Islamic Academy',
            'description' => $locale === 'ar' 
                ? 'تعلم القرآن الكريم والدراسات الإسلامية واللغة العربية عبر الإنترنت. تعليم عالي الجودة لجميع الأعمار في أي مكان في العالم.'
                : 'Learn Quran, Islamic Studies, and Arabic Language online. Quality education for all ages, anywhere in the world.',
            'keywords' => $locale === 'ar'
                ? 'تعليم إسلامي, قرآن أونلاين, لغة عربية, دراسات إسلامية, أكاديمية أونلاين, حفظ القرآن, تجويد, فقه'
                : 'Islamic education, Quran online, Arabic language, Islamic studies, online academy, Quran memorization, Tajweed, Fiqh',
            'url' => url()->current(),
            'type' => 'website',
        ];
        
        return view('pages.home', compact('featuredPost', 'seoData'));
    }
}
