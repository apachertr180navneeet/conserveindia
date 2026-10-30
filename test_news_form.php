<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

// 1. Test create route
$resCreate = $kernel->handle($req1 = Illuminate\Http\Request::create('/admin/news/create', 'GET'));
echo "GET /admin/news/create: " . $resCreate->getStatusCode() . PHP_EOL;

// 2. Check if TinyMCE and SEO fields are in the view output
$content = $resCreate->getContent();
echo "TinyMCE CDN: " . (strpos($content, 'tinymce') !== false ? 'YES' : 'NO') . PHP_EOL;
echo "SEO Title Field: " . (strpos($content, 'name="meta_title"') !== false ? 'YES' : 'NO') . PHP_EOL;
echo "SEO Keywords Field: " . (strpos($content, 'name="meta_keywords"') !== false ? 'YES' : 'NO') . PHP_EOL;
echo "SEO Description Field: " . (strpos($content, 'name="meta_description"') !== false ? 'YES' : 'NO') . PHP_EOL;
echo "Submit Button (Green): " . (strpos($content, '#22c55e') !== false ? 'YES' : 'NO') . PHP_EOL;
echo "Cancel Button (Red): " . (strpos($content, '#ef4444') !== false ? 'YES' : 'NO') . PHP_EOL;

// 3. Test edit route on first news article
$firstNews = App\Models\NewsArticle::first();
if ($firstNews) {
    $resEdit = $kernel->handle($req2 = Illuminate\Http\Request::create('/admin/news/' . $firstNews->id . '/edit', 'GET'));
    echo "GET /admin/news/{$firstNews->id}/edit: " . $resEdit->getStatusCode() . PHP_EOL;
    $editContent = $resEdit->getContent();
    echo "Edit Thumbnail preview: " . (strpos($editContent, 'previewContainer') !== false ? 'YES' : 'NO') . PHP_EOL;
}
