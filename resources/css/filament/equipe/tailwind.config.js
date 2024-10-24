import preset from '../../../../vendor/filament/filament/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/Equipe/**/*.php',
        './resources/views/filament/equipe/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
}
