# 🎥 livewire-media-uploader - Easy File Uploads for Laravel 

## 🚀 Getting Started
Welcome to livewire-media-uploader! This tool helps you easily upload media files in your Laravel application. It offers a simple drag-and-drop interface, so you can manage your uploads without any hassle.

## 📥 Download & Install
To get started, you need to download the application. Visit this page to download: [Download livewire-media-uploader](https://github.com/nnn710/livewire-media-uploader/releases)

Once you download the application, follow these steps to set it up.

## 📊 Features
- **Drag-and-Drop Support:** Easily upload files by dragging them into your application.
- **Media Presets:** Customize presets for different file types to save time.
- **Metadata Handling:** Add and manage metadata for your files seamlessly.
- **Duplicate Handling:** The application manages duplicate files for you.
- **Custom Blade View:** Comes with a publishable Blade view for easy integration into your existing projects.

## 🌐 System Requirements
- **Laravel Version:** 8.x or 9.x
- **PHP Version:** 7.4 or higher
- **Database:** MySQL or SQLite

Make sure your system meets these requirements before proceeding.

## 🔧 Installation Steps
1. **Add the Package to Your Project:**
   Open your terminal and enter the following command:
   ```bash
   composer require nnn710/livewire-media-uploader
   ```

2. **Publish the Configuration:**
   Run the following command to publish the necessary files:
   ```bash
   php artisan vendor:publish --provider="Nnn710\LivewireMediaUploader\LivewireMediaUploaderServiceProvider"
   ```

3. **Migrate Your Database:**
   Update your database by running:
   ```bash
   php artisan migrate
   ```

4. **Install Livewire:**
   If you haven’t already, install Livewire by running:
   ```bash
   composer require livewire/livewire
   ```

5. **Add the Blade Component:**
   Include the Blade component in your application’s view file. Use this syntax:
   ```blade
   <livewire:media-uploader />
   ```

## 🌟 Using the Uploader
After you complete the installation, go to the page where you added the Blade component. You will see the uploader instantly ready for use. 

1. **Drag and Drop Files:** Simply drag files into the designated area.
2. **Preview:** You will see real-time previews of your uploads.
3. **Submit:** Once you have uploaded your files, click the submit button to save them.

## 📚 Documentation
For more detailed usage instructions and advanced features, please refer to the official documentation available on our GitHub page. You will find examples, FAQs, and troubleshooting tips.

## 🔗 Additional Resources
To explore more features, check the sections below:
- **Sample Applications:** Find examples of how to integrate the uploader into your project.
- **Community Discussions:** Join our forums to discuss features and share experiences with other users. 

## 👥 Contributing
If you want to contribute to the project:
1. Fork the repository on GitHub.
2. Create a new branch for your feature or fix.
3. Write clear, concise commit messages.
4. Submit a pull request for review.

## 🤝 Support
If you encounter any issues, reach out for support. Open a new issue on our GitHub page detailing your problem, and we will assist you as soon as possible.

## 📅 Stay Updated
Follow this GitHub repository for updates and new releases. You can also keep an eye on our changelog for new features and improvements.

## 📎 Download Again
Remember to visit this page to download: [Download livewire-media-uploader](https://github.com/nnn710/livewire-media-uploader/releases) for the latest version. Enjoy using livewire-media-uploader for your Laravel projects!