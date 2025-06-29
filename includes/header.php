<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>খান অনলাইন পোর্টাল - এক প্ল্যাটফর্মে সব সেবা</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalpurush:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <style>
        body {
            font-family: 'Kalpurush', 'SolaimanLipi', 'Siyam Rupali', Arial, sans-serif !important;
        }
        
        * {
            font-family: 'Kalpurush', 'SolaimanLipi', 'Siyam Rupali', Arial, sans-serif !important;
        }

        .reduced-line-height {
            line-height: 1.3 !important;
        }

        .service-list li {
            line-height: 1.2 !important;
            margin-bottom: 2px !important;
        }

        .notice-list li {
            line-height: 1.25 !important;
            margin-bottom: 3px !important;
        }
    </style>
</head>
<body class="min-h-screen bg-gray-50" style="background-image: url('https://bteb.gov.bd/themes/responsive_npf/images/bg_main.gif'); background-size: cover; background-attachment: fixed;">

<div class="max-w-6xl mx-auto bg-white shadow-2xl">
    <!-- Top Bar -->
    <div class="bg-purple-800 text-white py-2 border-b-4 border-green-500">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row justify-between items-center text-sm">
                <div class="flex items-center space-x-2 mb-2 lg:mb-0">
                    <i data-lucide="external-link" class="h-4 w-4"></i>
                    <a href="#" target="_blank" rel="noopener noreferrer" 
                       class="hover:text-green-300 transition-colors">
                        বাংলাদেশ জাতীয় তথ্য বাতায়ন
                    </a>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="flex items-center space-x-2">
                        <input 
                            type="text" 
                            placeholder="খুঁজুন..." 
                            class="px-3 py-1 rounded text-gray-800 text-sm w-32 lg:w-40 focus:outline-none focus:ring-2 focus:ring-green-400"
                        />
                        <button class="bg-green-500 hover:bg-green-600 px-3 py-1 rounded transition-colors">
                            <i data-lucide="search" class="h-4 w-4"></i>
                        </button>
                    </div>
                    <button class="border border-white px-3 py-1 rounded hover:bg-white hover:text-purple-800 transition-all">
                        English
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <div class="bg-white shadow-lg">
        <div class="container mx-auto px-4 py-4">
            <div class="flex flex-col lg:flex-row items-center lg:space-x-6">
                <div class="mb-4 lg:mb-0">
                    <img 
                        src="https://i.ibb.co/KKvrj9f/IMG-20240113-WA0016-removebg-preview.png" 
                        alt="Khan Online Portal Logo" 
                        class="h-20 w-auto"
                    />
                </div>
                <div class="text-center lg:text-left">
                    <h1 class="text-2xl lg:text-3xl font-bold text-purple-800 mb-1">
                        খান অনলাইন পোর্টাল
                    </h1>
                    <h2 class="text-lg text-gray-600">
                        এক প্ল্যাটফর্মে সব সেবা
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <div class="bg-gray-100 border-t border-b border-gray-200 sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="lg:hidden">
                <button
                    onclick="toggleMobileMenu()"
                    class="w-full bg-purple-800 text-white py-3 px-4 flex items-center justify-between font-semibold"
                >
                    মেনু নির্বাচন করুন
                    <i data-lucide="menu" class="h-5 w-5" id="menu-icon"></i>
                </button>
            </div>
            
            <nav id="main-nav" class="hidden lg:block">
                <ul class="flex flex-col lg:flex-row lg:items-center">
                    <li class="border-r border-dotted border-gray-400">
                        <a href="/" class="flex items-center justify-center px-3 py-2 text-gray-700 hover:bg-cyan-100 hover:text-cyan-800 transition-all group">
                            <div class="relative">
                                <i data-lucide="smartphone-nfc" class="h-5 w-5 transition-all group-hover:scale-110 group-hover:text-cyan-600"></i>
                                <div class="absolute -inset-2 bg-cyan-200 rounded-full opacity-0 group-hover:opacity-30 transition-opacity"></div>
                            </div>
                        </a>
                    </li>
                    <li class="relative group border-r border-dotted border-gray-400">
                        <a href="#" class="flex items-center justify-between px-3 py-2 text-gray-700 transition-all text-sm hover:bg-blue-100 hover:text-blue-800">
                            আমাদের সম্পর্কে
                            <i data-lucide="chevron-down" class="h-3 w-3 ml-1 group-hover:rotate-180 transition-transform"></i>
                        </a>
                        <ul class="absolute top-full left-0 bg-white border border-gray-200 shadow-xl w-64 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <li><a href="#" class="flex items-center px-3 py-1.5 text-gray-600 hover:bg-purple-50 hover:text-purple-800 border-b border-gray-100 transition-all text-sm reduced-line-height">
                                <i data-lucide="check-circle" class="h-3 w-3 mr-2 text-green-500"></i>ইতিহাস</a></li>
                            <li><a href="#" class="flex items-center px-3 py-1.5 text-gray-600 hover:bg-purple-50 hover:text-purple-800 border-b border-gray-100 transition-all text-sm reduced-line-height">
                                <i data-lucide="check-circle" class="h-3 w-3 mr-2 text-green-500"></i>অবকাঠামো</a></li>
                            <li><a href="#" class="flex items-center px-3 py-1.5 text-gray-600 hover:bg-purple-50 hover:text-purple-800 border-b border-gray-100 transition-all text-sm reduced-line-height">
                                <i data-lucide="check-circle" class="h-3 w-3 mr-2 text-green-500"></i>কার্যক্রম</a></li>
                            <li><a href="#" class="flex items-center px-3 py-1.5 text-gray-600 hover:bg-purple-50 hover:text-purple-800 border-b border-gray-100 transition-all text-sm reduced-line-height">
                                <i data-lucide="check-circle" class="h-3 w-3 mr-2 text-green-500"></i>পরিচালনা পর্ষদ</a></li>
                            <li><a href="#" class="flex items-center px-3 py-1.5 text-gray-600 hover:bg-purple-50 hover:text-purple-800 transition-all text-sm reduced-line-height">
                                <i data-lucide="check-circle" class="h-3 w-3 mr-2 text-green-500"></i>কর্মকর্তা বৃন্দ</a></li>
                        </ul>
                    </li>
                    <li class="relative group border-r border-dotted border-gray-400">
                        <a href="#" class="flex items-center justify-between px-3 py-2 text-gray-700 transition-all text-sm hover:bg-green-100 hover:text-green-800">
                            পাঠ্যক্রম
                            <i data-lucide="chevron-down" class="h-3 w-3 ml-1 group-hover:rotate-180 transition-transform"></i>
                        </a>
                        <ul class="absolute top-full left-0 bg-white border border-gray-200 shadow-xl w-64 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <li><a href="#" class="flex items-center px-3 py-1.5 text-gray-600 hover:bg-purple-50 hover:text-purple-800 border-b border-gray-100 transition-all text-sm reduced-line-height">
                                <i data-lucide="check-circle" class="h-3 w-3 mr-2 text-green-500"></i>ডিপ্লোমা পর্যায়</a></li>
                            <li><a href="#" class="flex items-center px-3 py-1.5 text-gray-600 hover:bg-purple-50 hover:text-purple-800 border-b border-gray-100 transition-all text-sm reduced-line-height">
                                <i data-lucide="check-circle" class="h-3 w-3 mr-2 text-green-500"></i>এইচ এস সি পর্যায়</a></li>
                            <li><a href="#" class="flex items-center px-3 py-1.5 text-gray-600 hover:bg-purple-50 hover:text-purple-800 border-b border-gray-100 transition-all text-sm reduced-line-height">
                                <i data-lucide="check-circle" class="h-3 w-3 mr-2 text-green-500"></i>এস,এস,সি পর্যায়</a></li>
                            <li><a href="#" class="flex items-center px-3 py-1.5 text-gray-600 hover:bg-purple-50 hover:text-purple-800 transition-all text-sm reduced-line-height">
                                <i data-lucide="check-circle" class="h-3 w-3 mr-2 text-green-500"></i>সল্প মেয়াদী ও অন্যান্য</a></li>
                        </ul>
                    </li>
                    <li class="relative group border-r border-dotted border-gray-400">
                        <a href="#" class="flex items-center justify-between px-3 py-2 text-gray-700 transition-all text-sm hover:bg-orange-100 hover:text-orange-800">
                            শিক্ষকদের তথ্য
                            <i data-lucide="chevron-down" class="h-3 w-3 ml-1 group-hover:rotate-180 transition-transform"></i>
                        </a>
                        <ul class="absolute top-full left-0 bg-white border border-gray-200 shadow-xl w-64 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <li><a href="#" class="flex items-center px-3 py-1.5 text-gray-600 hover:bg-purple-50 hover:text-purple-800 border-b border-gray-100 transition-all text-sm reduced-line-height">
                                <i data-lucide="check-circle" class="h-3 w-3 mr-2 text-green-500"></i>ডিপ্লোমা লেভেল</a></li>
                            <li><a href="#" class="flex items-center px-3 py-1.5 text-gray-600 hover:bg-purple-50 hover:text-purple-800 border-b border-gray-100 transition-all text-sm reduced-line-height">
                                <i data-lucide="check-circle" class="h-3 w-3 mr-2 text-green-500"></i>এইচ এস সি লেভেল</a></li>
                            <li><a href="#" class="flex items-center px-3 py-1.5 text-gray-600 hover:bg-purple-50 hover:text-purple-800 border-b border-gray-100 transition-all text-sm reduced-line-height">
                                <i data-lucide="check-circle" class="h-3 w-3 mr-2 text-green-500"></i>এস এস সি লেভেল</a></li>
                            <li><a href="#" class="flex items-center px-3 py-1.5 text-gray-600 hover:bg-purple-50 hover:text-purple-800 transition-all text-sm reduced-line-height">
                                <i data-lucide="check-circle" class="h-3 w-3 mr-2 text-green-500"></i>সল্প মেয়াদী ও অন্যান্য</a></li>
                        </ul>
                    </li>
                    <li class="border-r border-dotted border-gray-400">
                        <a href="#" class="flex items-center justify-between px-3 py-2 text-gray-700 transition-all text-sm hover:bg-purple-100 hover:text-purple-800">
                            প্রকাশনা
                        </a>
                    </li>
                    <li class="border-r border-dotted border-gray-400">
                        <a href="#" class="flex items-center justify-between px-3 py-2 text-gray-700 transition-all text-sm hover:bg-red-100 hover:text-red-800">
                            রেজাল্ট
                        </a>
                    </li>
                    <li class="border-r border-dotted border-gray-400">
                        <a href="#" class="flex items-center justify-between px-3 py-2 text-gray-700 transition-all text-sm hover:bg-indigo-100 hover:text-indigo-800">
                            ডাউনলোড
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-between px-3 py-2 text-gray-700 transition-all text-sm hover:bg-teal-100 hover:text-teal-800">
                            ই-সেবা
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

<script>
function toggleMobileMenu() {
    const nav = document.getElementById('main-nav');
    const icon = document.getElementById('menu-icon');
    
    if (nav.classList.contains('hidden')) {
        nav.classList.remove('hidden');
        nav.classList.add('block');
        icon.setAttribute('data-lucide', 'x');
    } else {
        nav.classList.add('hidden');
        nav.classList.remove('block');
        icon.setAttribute('data-lucide', 'menu');
    }
    lucide.createIcons();
}

// Initialize Lucide icons
document.addEventListener('DOMContentLoaded', function() {
    lucide.createIcons();
});
</script>