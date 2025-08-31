# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

> **Versioning policy:** Until `1.0.0`, minor bumps (e.g., `0.1 → 0.2`) may include breaking changes. Patch releases in the same minor (e.g., `0.1.x`) are bug fixes only.

---

## [Unreleased]

### Added
- Configuration documentation for each option in `config/media-uploader.php`, including environment variable overrides, presets (types, mimes, max_kb), and collection → preset mapping.
- Guidance for creating and registering custom themes:
    - Create a new folder under `themes`, e.g. `custom`.
    - Copy the existing `media-uploader` theme file from `tailwind` or `bootstrap` into the new `custom` folder (do not change the file name).
    - Edit the copied file as desired.
    - Register it in the `themes` config array, for example: `'custom' => 'media-uploader::themes.custom.media-uploader'`.
    - Use it globally via `.env` (`MEDIA_UPLOADER_THEME=custom`) or per instance:
      <livewire:media-uploader
      :for="$post"
      collection="images"
      theme="custom"
      />

### Changed
- Clarified the behavior of `accept_from_config` and how the `accept` attribute is derived from the active preset.

### Fixed


---

## [v0.1.0] — 2025-08-30
### Added
- **Livewire v3** media uploader component.
- **Tailwind-only publishable Blade** view with Alpine-powered image preview overlay and delete confirmation modal.
- **Spatie Laravel Media Library** integration:
    - Attach/list/delete media within a configurable **collection** (e.g., `images`, `avatars`, `photos`).
    - Per-file **metadata** (caption, description, order).
    - Optional **thumbnail** usage (`getUrl('thumb')`) with graceful fallback.
- **Drag & drop** uploads with progress indicator.
- **Validation presets** via config (types, mimes, max size) with collection→preset mapping and optional auto-`accept` attribute.
- **Name-conflict strategies:** `rename`, `replace`, `skip`, `allow`.
- **Exact duplicate** detection (SHA-256) with `skipExactDuplicates`.
- Flexible **model resolution**:
    - `:for="$model"` (saved instance),
    - `model="user" :id="1"` (short name + id),
    - FQCN, morph map alias, or dotted paths with custom namespaces and local aliases.
- **Events** for UX integrations:
    - `media-uploaded`, `media-deleted` (with `id`), `media-meta-updated`.
- **Publishable config** (`media-uploader.php`) and **view** (`livewire/media-uploader.blade.php`).
- **Test suite** (Pest + Testbench) with in-memory SQLite and fake disks.

---

## Deprecations Policy
- Any deprecations will be noted here and kept for at least one subsequent minor (e.g., deprecate in `0.3.x`, remove in `0.4.0`). After `1.0.0`, deprecations will be removed in the next **major** release.

---

## Upgrade Notes
- To get thumbnail previews, add a `thumb` conversion on your model or adjust the view to your conversion names.
- For single-file collections (e.g., `avatars`), declare the collection in your model and call `->singleFile()`; the component’s `multiple=false` only affects the input, not backend replacement.

---

[Unreleased]: https://github.com/codebyray/livewire-media-uploader/compare/v0.1.0...HEAD
[v0.1.0]: https://github.com/codebyray/livewire-media-uploader/releases/tag/v0.1.0
