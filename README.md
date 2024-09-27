# Hyvä Checkout EU VAT ID Format Validator

**Note:** This module **only validates the syntax** of the VAT ID. It **does not perform a VIES check** to verify the validity of the VAT number.

For VIES validation, we recommend using the [Geissweb EU VAT Enhanced for Magento 2](https://geissweb.com/eu-vat-enhanced-for-magento-2.html) extension, along with the [Hyvä Checkout Geissweb EU VAT Compatibility Module](https://github.com/Vendic/hyva-checkout-geissweb-euvat). Both extensions are required for full Hyvä Checkout compatibility.

This extension is designed to function alongside those extensions to ensure that a client cannot checkout with an **incorrectly formatted** VAT ID. This feature can be particularly useful for B2B projects.

---

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

We welcome contributions to improve this extension. Feel free to open issues or submit pull requests via the [GitHub issues](https://github.com/Vendic/hyva-checkout-eu-vat-id-format-validator/issues).

## License

This project is licensed under the MIT License. See the [LICENSE](./LICENSE) file for details.
