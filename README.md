# yii2-widget-jquery-postcodes

Based on [jquery.postcodes](https://github.com/ideal-postcodes/jquery.postcodes) (imported by bower) allowing us to convert postcodes to address' via [https://ideal-postcodes.co.uk](https://ideal-postcodes.co.uk)


# Installation

Either run

```
php composer.phar require --prefer-dist wubbleyou/yii2-widget-jquery-postcodes "*"
```

or add

```
"wubbleyou/yii2-widget-jquery-postcodes": "*"
```

to the require section of your `composer.json` file.

# Usage

After installing the extension the following is required.

Add the widget to the page, please see [the jQuery Demo](https://ideal-postcodes.co.uk/jquery) for more options.

An API Key is required from [https://ideal-postcodes.co.uk](https://ideal-postcodes.co.uk)

```

JQueryPostcodesWidget::widget([

        'pluginOptions' =>
        [
            'api_key' => 'key',
            'output_fields' => [
               'line_1' => '#address_line_1',
               'line_2' => '#address_line_2',
               'post_town' => '#address_line_town',
               'county' => '#address_line_county',
               'postcode' => '#address_line_postcode'
            ],
            'input_class' => 'form-control',
            'button_class' => 'btn btn-default'
        ]])
```
