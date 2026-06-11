<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pharmacien - PharmaStock</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Poppins', 'sans-serif'] },
                    animation: { 'fade-in': 'fadeIn 0.5s ease-out forwards' },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(15px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>body { font-weight: 300; }</style>
</head>
<body class="bg-slate-50 text-slate-700 text-sm antialiased flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <aside class="w-64 bg-white border-r border-slate-200 flex flex-col shadow-sm z-10">
        <div class="h-16 flex items-center px-6 border-b border-slate-100">
            <i class="fa-solid fa-notes-medical text-emerald-600 text-xl mr-3"></i>
            <span class="font-semibold text-slate-800 text-base">PharmaStock</span>
        </div>
        <div class="p-4 flex-1">
            <p class="text-[10px] text-slate-400 font-medium mb-4 uppercase tracking-wider">Supervision</p>
            <nav class="space-y-2">
                <!-- Actif -->
                <a href="#" class="w-full flex items-center px-4 py-2.5 text-emerald-700 bg-emerald-50 rounded-lg transition-all duration-200 font-medium">
                    <i class="fa-solid fa-user-doctor w-5"></i> État du Stock
                </a>
                <a href="#" class="w-full flex items-center px-4 py-2.5 text-slate-500 hover:bg-slate-50 rounded-lg transition-all duration-200">
                    <i class="fa-solid fa-truck-arrow-right w-5"></i> Retours Labo
                </a>
            </nav>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 overflow-y-auto p-8 animate-fade-in">
        <header class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-2xl font-semibold text-slate-800">Espace Pharmacien Titulaire</h1>
                <p class="text-slate-500 text-xs mt-1">Tableau de bord de surveillance des lots et péremptions</p>
            </div>
            <button class="bg-white border border-emerald-200 text-emerald-600 px-4 py-2 rounded-lg hover:bg-emerald-50 hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 flex items-center">
                <i class="fa-solid fa-file-export mr-2"></i> Exporter
            </button>
        </header>

        <!-- KPI Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <div class="bg-white rounded-xl p-5 border border-slate-100 shadow-sm flex items-center justify-between hover:-translate-y-1 transition-transform duration-300 cursor-pointer border-l-4 border-l-emerald-400">
                <div>
                    <p class="text-[11px] text-slate-500 font-medium mb-1 uppercase tracking-wide">Stock Sain (> 6 mois)</p>
                    <h3 class="text-3xl font-semibold text-slate-800">1,248 <span class="text-xs font-normal text-slate-400">lots</span></h3>
                </div>
                <div class="w-12 h-12 rounded-full bg-emerald-50 flex items-center justify-center text-emerald-500 shadow-inner">
                    <i class="fa-solid fa-shield-check text-xl"></i>
                </div>
            </div>
            
            <div class="bg-white rounded-xl p-5 border border-slate-100 shadow-sm flex items-center justify-between hover:-translate-y-1 transition-transform duration-300 cursor-pointer border-l-4 border-l-amber-400">
                <div>
                    <p class="text-[11px] text-slate-500 font-medium mb-1 uppercase tracking-wide">Alerte Orange (< 90 jrs)</p>
                    <h3 class="text-3xl font-semibold text-slate-800">34 <span class="text-xs font-normal text-slate-400">lots</span></h3>
                </div>
                <div class="w-12 h-12 rounded-full bg-amber-50 flex items-center justify-center text-amber-500 shadow-inner">
                    <i class="fa-solid fa-clock-rotate-left text-xl"></i>
                </div>
            </div>

            <div class="bg-white rounded-xl p-5 border border-slate-100 shadow-sm flex items-center justify-between hover:-translate-y-1 transition-transform duration-300 cursor-pointer border-l-4 border-l-red-500">
                <div>
                    <p class="text-[11px] text-slate-500 font-medium mb-1 uppercase tracking-wide">Alerte Rouge (< 30 jrs)</p>
                    <h3 class="text-3xl font-semibold text-slate-800">12 <span class="text-xs font-normal text-slate-400">lots</span></h3>
                </div>
                <div class="w-12 h-12 rounded-full bg-red-50 flex items-center justify-center text-red-500 shadow-inner">
                    <i class="fa-solid fa-triangle-exclamation text-xl"></i>
                </div>
            </div>
        </div>

        <!-- Table des lots critiques -->
        <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden">
            <div class="p-5 border-b border-slate-100 flex justify-between items-center bg-slate-50/80 backdrop-blur-sm">
                <h2 class="text-sm font-medium text-slate-800">Surveillance détaillée des lots</h2>
                <select class="text-xs border border-slate-200 rounded-md p-1.5 bg-white text-slate-600 outline-none focus:border-emerald-400 focus:ring-1 focus:ring-emerald-400 transition-all">
                    <option>Tous les lots</option>
                    <option selected>Alerte Rouge uniquement</option>
                </select>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50 text-[10px] uppercase text-slate-400 tracking-wider">
                            <th class="p-4 font-medium">Médicament</th>
                            <th class="p-4 font-medium">N° de Lot</th>
                            <th class="p-4 font-medium">Quantité</th>
                            <th class="p-4 font-medium">Expiration</th>
                            <th class="p-4 font-medium text-right">Action (Destruction/Retour)</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm divide-y divide-slate-100">
                        <tr class="hover:bg-slate-50/80 transition-colors group">
                            <td class="p-4 text-slate-800 font-medium">Paracétamol Sandoz</td>
                            <td class="p-4 text-slate-500 text-xs font-mono">LOT-992-X</td>
                            <td class="p-4 text-slate-600">45 boîtes</td>
                            <td class="p-4">
                                <span class="bg-red-50 text-red-600 border border-red-100 px-2 py-1 rounded-md text-[11px] font-medium inline-flex items-center">
                                    <span class="w-1.5 h-1.5 rounded-full bg-red-500 mr-1.5 animate-pulse"></span> 12 Juin 2026
                                </span>
                            </td>
                            <td class="p-4 text-right">
                                <button class="text-[11px] bg-white text-slate-600 border border-slate-200 px-3 py-1.5 rounded-md hover:bg-red-50 hover:text-red-600 hover:border-red-200 transition-all shadow-sm">
                                    <i class="fa-solid fa-trash-can mr-1"></i> Cyclamed
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>