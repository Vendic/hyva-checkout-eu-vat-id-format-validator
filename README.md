# Hyvä Checkout EU VAT ID Format Validator
This Magento 2 extension validates the syntax of the VAT ID in the Hyvä checkout for EU countries. It supports country-specific VAT ID formats and ensures that valid syntax is entered during checkout. Non-EU countries are always accepted without validation.

## Features
- VAT ID syntax validation for EU member states
- Easily translatable error messages
- Hyvä-compatible validation rules
- Non-EU countries bypass validation (always return `true`)

## Installation

### 1. Prerequisites
Before you install this extension, make sure you have the following installed:
- Magento 2
- [Hyvä Checkout](https://github.com/hyva-themes/magento2-hyva-checkout) v1.1.23 or higher

### 2. Install via Composer
To install this extension, run the following commands in your Magento 2 root directory:

```bash
composer require vendic/hyva-checkout-eu-vat-id-format-validator
bin/magento setup:upgrade
```

## Configuration

No configuration is needed. The extension will automatically validate the VAT ID during checkout in the Hyvä Checkout form. The validation is based on the country selected in the checkout form.

## Contributing

We welcome contributions to improve this extension. Feel free to open issues or submit pull requests via the [GitHub repository](https://github.com/Vendic/hyva-checkout-eu-vat-id-format-validator).

## License

This project is licensed under the MIT License. See the [LICENSE](./LICENSE) file for details.

### Support

If you have any issues or questions, please reach out via the GitHub repository's issue tracker.
