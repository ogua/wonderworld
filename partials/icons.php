<?php
/**
 * Shared line-icon set (24x24, stroke=currentColor) used in place of emoji for
 * card icons and empty-state icons. Required once via partials/head.php so
 * icon() is available on every page. Sizing/color is controlled entirely by
 * CSS (.card__icon svg, .empty-state__icon svg) via currentColor + explicit
 * width/height, never by attributes here.
 */

function icon(string $name): string
{
    $paths = [
        'target' => '<circle cx="12" cy="12" r="8"/><circle cx="12" cy="12" r="4.5"/><circle cx="12" cy="12" r="1"/>',
        'globe' => '<circle cx="12" cy="12" r="9"/><ellipse cx="12" cy="12" rx="4" ry="9"/><path d="M3 12h18"/>',
        'star' => '<path d="M12 2.5l2.9 6.2 6.6.7-4.9 4.6 1.3 6.6L12 17.3 6.1 20.6l1.3-6.6-4.9-4.6 6.6-.7z"/>',
        'link' => '<path d="M9.5 14.5l5-5"/><path d="M8 13a3.5 3.5 0 0 1 0-5l2-2a3.5 3.5 0 0 1 5 5l-1 1"/><path d="M16 11a3.5 3.5 0 0 1 0 5l-2 2a3.5 3.5 0 0 1-5-5l1-1"/>',
        'compass' => '<circle cx="12" cy="12" r="9"/><path d="M15.5 8.5l-2 5-5 2 2-5z"/>',
        'palette' => '<path d="M12 3a9 9 0 1 0 0 18c1.4 0 2-.9 2-1.8 0-.5-.2-.9-.6-1.3-.4-.4-.5-.8-.2-1.3.3-.5.9-.8 1.8-.8H17a4 4 0 0 0 4-4c0-5-4-8.8-9-8.8z"/><circle cx="7.5" cy="10.5" r="1.1"/><circle cx="10.5" cy="7.2" r="1.1"/><circle cx="15" cy="7.8" r="1.1"/><circle cx="17.2" cy="11.8" r="1.1"/>',
        'home' => '<path d="M4 21V9l8-6 8 6v12"/><path d="M9 21v-6h6v6"/>',
        'sun' => '<circle cx="12" cy="12" r="4"/><path d="M12 2v2.2M12 19.8V22M4.9 4.9l1.5 1.5M17.6 17.6l1.5 1.5M2 12h2.2M19.8 12H22M4.9 19.1l1.5-1.5M17.6 6.4l1.5-1.5"/>',
        'laptop' => '<rect x="3" y="4.5" width="18" height="11.5" rx="1.5"/><path d="M2 19.5h20"/>',
        'backpack' => '<path d="M8 4h8a2 2 0 0 1 2 2v1h1a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h1V6a2 2 0 0 1 2-2z"/><path d="M9 4v3h6V4"/><path d="M9 13h6"/>',
        'calendar' => '<rect x="3" y="4.5" width="18" height="16" rx="2"/><path d="M16 2.5v4M8 2.5v4M3 9.5h18"/>',
        'book' => '<path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>',
        'trophy' => '<path d="M8 4h8v5a4 4 0 0 1-8 0z"/><path d="M8 5H5a3 3 0 0 0 3 3"/><path d="M16 5h3a3 3 0 0 1-3 3"/><path d="M12 13v3"/><path d="M9 20h6"/><path d="M10 16h4l.5 4h-5z"/>',
        'heart' => '<path d="M12 20s-7-4.4-9.5-9A5.5 5.5 0 0 1 12 5.5 5.5 5.5 0 0 1 21.5 11c-2.5 4.6-9.5 9-9.5 9z"/>',
        'puzzle' => '<rect x="4" y="8" width="8" height="8" rx="1.5"/><rect x="12" y="4" width="8" height="8" rx="1.5"/><circle cx="12" cy="12" r="2"/>',
        'chat' => '<path d="M21 11.5a8.4 8.4 0 0 1-8.5 8.4L4 21l1.1-4.5a8.4 8.4 0 1 1 15.9-5z"/>',
        'newspaper' => '<rect x="3" y="5" width="14" height="16" rx="1"/><path d="M7 9h6M7 12h6M7 15h4"/><path d="M17 8h3a1 1 0 0 1 1 1v10a2 2 0 0 1-2 2H8"/>',
        'lightbulb' => '<path d="M9 18h6"/><path d="M10 21h4"/><path d="M12 3a6 6 0 0 0-4 10.5c.6.6 1 1.4 1 2.5h6c0-1.1.4-1.9 1-2.5A6 6 0 0 0 12 3z"/>',
        'document' => '<path d="M6 2h9l5 5v13a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1z"/><path d="M14 2v5h5"/>',
        'waves' => '<path d="M2 8.5c1.5-2 3.5-2 5 0s3.5 2 5 0 3.5-2 5 0 3.5 2 5 0"/><path d="M2 14.5c1.5-2 3.5-2 5 0s3.5 2 5 0 3.5-2 5 0 3.5 2 5 0"/>',
        'racket' => '<circle cx="12" cy="12" r="8"/><path d="M6.5 6c2 3 2 9 0 12"/><path d="M17.5 6c-2 3-2 9 0 12"/>',
        'ribbon' => '<path d="M12 2c.5 4 2 7 6 8-4 1-5.5 4-6 8-.5-4-2-7-6-8 4-1 5.5-4 6-8z"/>',
        'flame' => '<path d="M12 21c-3.5 0-6-2.5-6-6 0-3 2-4.5 2.5-7 .3 1.5 1.2 2.2 2 2 .5-2 0-4.5 1.5-6.5 2 2.5 5 5 5 9.5 0 4.5-2.5 8-5 8z"/>',
        'abacus' => '<rect x="4" y="4" width="16" height="16" rx="1.5"/><path d="M4 8h16M4 12h16M4 16h16"/><circle cx="8" cy="8" r="1.3"/><circle cx="16" cy="8" r="1.3"/><circle cx="11" cy="12" r="1.3"/><circle cx="18" cy="12" r="1.3"/><circle cx="7" cy="16" r="1.3"/><circle cx="14" cy="16" r="1.3"/>',
        'books-stack' => '<rect x="3" y="16" width="18" height="3" rx="1"/><rect x="4" y="11" width="16" height="3" rx="1"/><rect x="5" y="6" width="14" height="3" rx="1"/>',
        'refresh' => '<path d="M21 8a9 9 0 0 0-15.5-5.3L3 5"/><path d="M3 3v5h5"/><path d="M3 16a9 9 0 0 0 15.5 5.3L21 19"/><path d="M21 21v-5h-5"/>',
        'teddy' => '<circle cx="12" cy="13" r="6"/><circle cx="6.5" cy="7" r="2.2"/><circle cx="17.5" cy="7" r="2.2"/><circle cx="9.5" cy="12" r="0.8"/><circle cx="14.5" cy="12" r="0.8"/><path d="M10 15.5c.7.6 1.3.6 2 0"/>',
        'graduation-cap' => '<path d="M2 9l10-5 10 5-10 5z"/><path d="M6 11v5c0 1.5 3 3 6 3s6-1.5 6-3v-5"/><path d="M22 9v6"/>',
        'flag' => '<path d="M5 3v18"/><path d="M5 4h13l-3 4 3 4H5"/>',
        'shield' => '<path d="M12 3l7 3v5c0 5-3.5 8.5-7 10-3.5-1.5-7-5-7-10V6z"/><path d="M9 12l2 2 4-4"/>',
        'apple' => '<path d="M12 8c-2.5-3-6.5-1.5-6.5 3 0 4 3 8 6.5 8s6.5-4 6.5-8c0-4.5-4-6-6.5-3z"/><path d="M12 8V5"/><path d="M12 5c.5-1 1.8-1.5 3-1.2"/>',
        'people' => '<circle cx="9" cy="8" r="3"/><path d="M4 20c0-3 2.5-5 5-5s5 2 5 5"/><circle cx="17.5" cy="9" r="2.3"/><path d="M15.2 20c0-2.2 1.1-4 3.8-4.3"/>',
        'person' => '<circle cx="12" cy="8" r="4"/><path d="M4.5 20.5c0-4 3.5-6.5 7.5-6.5s7.5 2.5 7.5 6.5"/>',
        'info' => '<circle cx="12" cy="12" r="9"/><path d="M12 11v6"/><circle cx="12" cy="7.5" r="1" fill="currentColor" stroke="none"/>',
        'chevron-left' => '<path d="M15 5l-7 7 7 7"/>',
        'chevron-right' => '<path d="M9 5l7 7-7 7"/>',
    ];

    $inner = $paths[$name] ?? $paths['star'];
    return '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $inner . '</svg>';
}
