<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header();
?>

<div class="min-h-screen w-full flex items-center justify-center bg-gray-50">
    <div class="card w-full max-w-md mx-4">
        <div class="card-content pt-6">
            <div class="flex mb-4 gap-2">
                <svg class="h-8 w-8 text-red-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                <h1 class="text-2xl font-bold text-gray-900">404 Page Not Found</h1>
            </div>

            <p class="mt-4 text-sm text-gray-600">
                お探しのページは見つかりませんでした。
            </p>
            <p class="mt-2 text-sm text-gray-600">
                URLが正しいかご確認ください。
            </p>
            <div class="mt-6 text-center">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-block bg-ymd-blue hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    ホームページに戻る
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>