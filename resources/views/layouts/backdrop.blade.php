<div class="absolute inset-0 z-0 overflow-hidden bg-black">
    <!-- Mistlaag 1 -->
    <div class="absolute inset-0 animate-fog opacity-30 bg-[radial-gradient(circle_at_20%_30%,white_0%,transparent_70%)]"></div>

    <!-- Mistlaag 2 -->
    <div class="absolute inset-0 animate-fog-slow opacity-20 bg-[radial-gradient(circle_at_80%_70%,white_0%,transparent_70%)]"></div>
</div>

<style>
    @keyframes fogMove {
        0% { transform: translateX(0) translateY(0) scale(1); }
        50% { transform: translateX(-10%) translateY(10%) scale(1.1); }
        100% { transform: translateX(0) translateY(0) scale(1); }
    }

    @keyframes fogMoveSlow {
        0% { transform: translateX(0) translateY(0) scale(1); }
        50% { transform: translateX(10%) translateY(-10%) scale(1.2); }
        100% { transform: translateX(0) translateY(0) scale(1); }
    }

    .animate-fog {
        animation: fogMove 25s ease-in-out infinite;
    }

    .animate-fog-slow {
        animation: fogMoveSlow 40s ease-in-out infinite;
    }
</style>
