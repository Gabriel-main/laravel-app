<x-home-layout>

    <section class="pt-32 pb-20 lg:pt-48 lg:pb-32 px-12">
        <div class="max-w-7xl mx-auto text-center">
            <span
                class="inline-block py-1 px-3 rounded-full bg-indigo-50 text-indigo-700 text-xs font-bold uppercase tracking-wider mb-5">
                Nueva forma de administra tu gastos.
            </span>
            <h1 class="text-3xl md:text-5xl lg:text-7xl font-extrabold text-slate-900 mb-6 tracking-tight">
                Controla tus gastos <br>
                <span class="text-indigo-600">sin complicaciones.</span>
            </h1>
            <p class="text-lg text-slate-600 dark:text-slate-400 max-w-2xl mx-auto mb-10">
                La forma más sencilla de administrar tu dinero. Monitorea tus ingresos y egresos en tiempo real para
                entender exactamente a dónde va cada centavo.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <button
                    class="bg-slate-900 text-white px-8 py-4 rounded-xl font-bold hover:bg-slate-800 transition transform hover:-translate-y-1">
                    Comenzar ahora
                </button>
            </div>

            <div class="mt-16 relative max-w-5xl mx-auto">
                <div class="rounded-2xl border border-slate-200 bg-white p-2 shadow-2xl">
                    <div
                        class="rounded-xl bg-slate-100 aspect-video flex items-center justify-center border border-dashed border-slate-300">
                        <i class="fas fa-desktop text-6xl text-slate-300"></i>
                    </div>
                </div>
                <div class="absolute -z-10 inset-0 bg-indigo-500/10 blur-3xl rounded-full transform scale-90"></div>
            </div>
        </div>
    </section>

    <section id="features" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-12 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-12">
                <div class="group">
                    <div
                        class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900/30 rounded-lg flex items-center justify-center text-indigo-600 dark:text-indigo-400 mb-6 group-hover:bg-indigo-600 group-hover:text-white transition-all duration-300">
                        <i class="fas fa-wallet text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-slate-900 dark:text-white">Control de Gastos</h3>
                    <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                        Registra cada compra en segundos. Clasifica tus gastos automáticamente para saber exactamente
                        cuánto destinas a cada categoría.
                    </p>
                </div>

                <div class="group">
                    <div
                        class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900/30 rounded-lg flex items-center justify-center text-indigo-600 dark:text-indigo-400 mb-6 group-hover:bg-indigo-600 group-hover:text-white transition-all duration-300">
                        <i class="fas fa-bullseye text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-slate-900 dark:text-white">Metas de Ahorro</h3>
                    <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                        Establece límites mensuales y crea metas para ese viaje o compra especial. Recibe alertas antes
                        de exceder tu presupuesto.
                    </p>
                </div>

                <div class="group">
                    <div
                        class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900/30 rounded-lg flex items-center justify-center text-indigo-600 dark:text-indigo-400 mb-6 group-hover:bg-indigo-600 group-hover:text-white transition-all duration-300">
                        <i class="fas fa-chart-line text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-slate-900 dark:text-white">Reportes Claros</h3>
                    <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                        Visualiza la salud de tus finanzas con gráficos interactivos. Identifica patrones de consumo y
                        descubre oportunidades de ahorro.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 px-12">
        <div
            class="max-w-5xl mx-auto bg-indigo-600 dark:bg-indigo-700 rounded-3xl p-10 md:p-16 text-center text-white shadow-2xl shadow-indigo-200 dark:shadow-none overflow-hidden relative">

            <div class="relative z-10">
                <h2 class="text-3xl md:text-5xl font-black mb-6 leading-tight">
                    ¿Listo para tomar el <br class="hidden md:block">
                    control de tu dinero?
                </h2>

                <p class="text-indigo-100 mb-10 text-lg md:text-xl max-w-2xl mx-auto">
                    Únete a miles de personas que ya están ahorrando y construyendo su futuro financiero con nuestra
                    plataforma.
                </p>

                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <button
                        class="bg-white text-indigo-600 px-8 py-4 rounded-xl font-bold text-lg hover:bg-indigo-50 transition-all shadow-lg active:scale-95">
                        Empezar gratis hoy
                    </button>
                    <button
                        class="bg-indigo-500/30 border border-indigo-400 text-white px-8 py-4 rounded-xl font-bold text-lg hover:bg-indigo-500/50 transition-all active:scale-95">
                        Ver cómo funciona
                    </button>
                </div>
            </div>

            <div class="absolute -top-24 -right-24 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-24 -left-24 w-64 h-64 bg-indigo-400/20 rounded-full blur-3xl"></div>
        </div>
    </section>

</x-home-layout>
