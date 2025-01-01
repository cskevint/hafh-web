import { defineConfig } from 'vite'
import react from '@vitejs/plugin-react'

// https://vite.dev/config/
export default defineConfig({
  plugins: [react()],
  // generate .vite/manifest.json in outDir
  manifest: true,
  rollupOptions: {
    // overwrite default .html entry
    input: '/src/main.tsx',
  },
  build: {
    rollupOptions: {
        output: {
            // dir: '~/plugin/assets/',
            entryFileNames: 'quiz.js',
            // assetFileNames: 'plugin.css',
            // chunkFileNames: "chunk.js",
            // manualChunks: undefined,
        }
    }
}
})
