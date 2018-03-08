<?php

return [
	"remove.helper" => [
		"handler" => App\Components\Email\Helpers\RemoveHelper::class,
		"allow_on_subject" => false
	],
	"[app_name]" => [
		"handler" => App\Components\Email\Helpers\AppNameHelper::class,
		"allow_on_subject" => true
	],
	"[app_url]" => [
		"handler" => App\Components\Email\Helpers\AppUrlHelper::class,
		"allow_on_subject" => true
	],
	"[user_name]" => [
		"handler" => App\Components\Email\Helpers\UserNameHelper::class,
		"allow_on_subject" => true
	],
	"[button]" => [
		"child" => [
			"url" => [
				"activate_account" => [
					"handler" => App\Components\Email\Helpers\ButtonActivateAccountHelper::class,
					"allow_on_subject" => false
				],
				"account_dashboard" => [
					"handler" => App\Components\Email\Helpers\ButtonAccountDashboardHelper::class,
					"allow_on_subject" => false
				],
				"reset_password" => [
					"handler" => App\Components\Email\Helpers\ButtonResetPassword::class,
					"allow_on_subject" => false
				],
			]
		],
		"handler" => App\Components\Email\Helpers\ButtonHelper::class,
		"allow_on_subject" => false
	],
	"[order_id]" => [
		"handler" => App\Components\Email\Helpers\OrderIDHelper::class,
		"allow_on_subject" => true
	],
	"[order_date]" => [
		"handler" => App\Components\Email\Helpers\OrderDateHelper::class,
		"allow_on_subject" => true
	],
	"[order_status]" => [
		"handler" => App\Components\Email\Helpers\OrderStatusHelper::class,
		"allow_on_subject" => false
	],
	"[order]" => [
		"child" => [
			"details" => [
				"payment_method" => [
					"handler" => App\Components\Email\Helpers\OrderPaymentMethodHelper::class,
					"allow_on_subject" => false
				],
				"shipping_address_street" => [
					"handler" => App\Components\Email\Helpers\OrderShippingAddressStreetHelper::class,
					"allow_on_subject" => false
				],
				"shipping_address_city" => [
					"handler" => App\Components\Email\Helpers\OrderShippingAddressCityHelper::class,
					"allow_on_subject" => false
				],
				"shipping_address_province" => [
					"handler" => App\Components\Email\Helpers\OrderShippingAddressProvinceHelper::class,
					"allow_on_subject" => false
				],
				"shipping_address_subdistrict" => [
					"handler" => App\Components\Email\Helpers\OrderShippingAddressSubdistrictHelper::class,
					"allow_on_subject" => false,
				],
				"shipping_address_zipcode" => [
					"handler" => App\Components\Email\Helpers\OrderShippingAddressZipCodeHelper::class,
					"allow_on_subject" => false
				],
				"shipping_estimated_delivery" => [
					"handler" => App\Components\Email\Helpers\OrderShippingEstimatedDeliveryHelper::class,
					"allow_on_subject" => false
				],
				"shipping_estimated_cost" => [
					"handler" => App\Components\Email\Helpers\OrderShippingEstimatedCostHelper::class,
					"allow_on_subject" => false
				],
				"shipping_tracking_number" => [
					"handler" => App\Components\Email\Helpers\OrderShippingTrackingNumberHelper::class,
					"allow_on_subject" => true
				],
				"shipping_courier" => [
					"handler" => App\Components\Email\Helpers\ShippingCourierHelper::class,
					"allow_on_subject" => true
				],
				"order_id" => [
					"handler" => App\Components\Email\Helpers\OrderIDHelper::class,
					"allow_on_subject" => true
				],
				"order_date" => [
					"handler" => App\Components\Email\Helpers\OrderDateHelper::class,
					"allow_on_subject" => true
				],
				"order_details_table" => [
					"handler" => App\Components\Email\Helpers\OrderDetailsTable::class,
					"allow_on_subject" => false
				]
			]
		]
	]
];
