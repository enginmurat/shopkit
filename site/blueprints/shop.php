<?php if(!defined('KIRBY')) exit ?>

title: Shop
icon: cog
pages: true
  template:
    - category
deletable: false
fields:
  tab1:
    label: General
    type: tabs
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  markdown
  slider:
    label: Photo slider
    help: Choose photos to show at the top of the page.
    type:  selector
    mode:  multiple
    types:
      - image
  featured:
    label: Featured products
    help:  Featured products show up in the sidebar with a one-click "buy now" button
    type: structure
    style: table
    fields:
      product:
        label: Featured product
        type: select
        options: query
        query: 
          page: shop
          fetch: pages
          template: product
      calculation:
        label: Default price variant
        help: When a product has more than one price variant, choose which one is used for the "buy now" button
        type: select
        options:
          low: Show lowest price
          high: Show highest price
        default: low
  tab2:
    label: Shipping & tax
    type: tabs
  shipping:
    label: Shipping methods
    help: 
    type: structure
    style: table
    fields:
      method:
        label: Method
        help: e.g. Ground shipping, First-class airmail, Pick-up ...
        required: true
      countries:
        label: Countries
        help: Apply this shipping method to certain countries
        type: multiselect
        options: query
        query:
          page: 'shop/countries'
          fetch: children
      flat:
        label: Flat rate
        help: Same rate, no matter how many items
        type: text
        validate: num
        width: 1/2
      item:
        label: Per item rate
        help: Rate based on number of items in the cart
        type: text
        validate: num
        width: 1/2
      weight:
        label: Rate by total weight
        help: "Each line is a price tier. Use this format: <span style="font-style: normal;"><br /><strong>weight : shipping</strong><br /><strong>0 : 12.00</strong> <em>($12 for weight of 0 or more)</em><br /><strong>7 : 15.00</strong> <em>($15 for weight of 7 or more)</em><br /><strong>20 : 18.00</strong> <em>($18 for weight of 20 or more)</em></span>"
        type: textarea
        width: 1/2
      price:
        label: Rate by total price
        help: "Each line is a price tier. Use this format: <span style="font-style: normal;"><br /><strong>price : shipping</strong><br /><strong>0.00 : 2.00</strong> <em>($2 for total cart of $0 or more)</em><br /><strong>10.00 : 5.00</strong> <em>($5 for total cart of $7 or more)</em><br /><strong>20.00 : 0.00</strong> <em>(free shipping over $20)</em></span>"
        type: textarea
        width: 1/2
      calculation:
        label: Resolve multiple shipping rates
        help: When more than one calculation option is defined, choose which one applies
        type: select
        options:
          low: Use lowest shipping rate
          high: Use highest shipping rate
        default: low
  tax:
    label: Tax rates
    type: structure
    style: table
    fields:
      rate:
        label: Tax rate
        help: Decimal format. e.g. <strong>0.13</strong> means 13% sales tax
        type: text
      countries:
        label: Countries
        help: "Apply this tax rate to certain countries (<strong>All countries</strong> does not override other rules)"
        type: multiselect
        options: query
        query:
          page: 'shop/countries'
          fetch: children
  tab3:
    label: Payment
    type: tabs
  paylater:
    label: Pay later
    help: User roles that can submit an order without paying online
    type: multiselect
    default: admin
    options:
      admin: Admin
      wholesaler: Wholesaler
      customer: Customer
  currency-code:
    label: Currency code
    help: e.g. USD, EUR
    type: text
    default: USD
    width: 1/4
    required: true
  currency-symbol:
    label: Currency symbol
    help: e.g. $, €
    type: text
    default: $
    width: 1/4
    required: true
  currency-position:
    label: Currency symbol position
    type: select
    options:
      before: Before (e.g. $10)
      after:  After (e.g. 10 $)
    default: before
    width: 1/2
    required: true
  paypal-email:
    label: PayPal email address
    type: text
    width: 1/2
  paypal-action:
    label: PayPal status
    type: select
    options:
      sandbox: Sandbox (for testing purposes)
      live: Live (for real purchases)
    default: sandbox
    width: 1/2
    required: true
  tab4:
    label: Discounts
    type: tabs
  discounts-role:
    label: Customer discounts
    help: Set automatic discounts for logged-in customers and wholesalers. These apply to the entire order.
    type: structure
    style: table
    fields:
      role:
        label: User role
        type: select
        options:
          customer: Logged-in customer
          wholesaler: Wholesaler
          admin: Admin
        default: wholesaler
        required: true
      kind:
        label: Discount type
        type: select
        options:
          percentage: Percentage
          flat: Flat amount
        default: percentage
        width: 1/2
        required: true
      amount:
        label: Value
        help: For percentage discounts, use whole numbers.
        type: text
        validate:
          min: 0
          - num
        width: 1/2
        required: true
      minorder:
        label: Minimum order
        help: Only apply the discount if the customer spends at least this much.
        type: text
        validate:
          min: 0
          - num
  discounts-code:
    label: Discount codes
    help: Anyone can use these to get a discount on their entire order.
    type: structure
    style: table
    fields:
      code:
        label: Discount code
        type: text
        required: true
      kind:
        label: Discount type
        type: select
        options:
          percentage: Percentage
          flat: Flat amount
        default: percentage
        width: 1/2
        required: true
      amount:
        label: Value
        help: For percentage discounts, use whole numbers.
        type: text
        validate:
          min: 0
          - num
        width: 1/2
        required: true
      minorder:
        label: Minimum order
        help: Only apply the discount if the customer spends at least this much.
        type: text
        validate:
          min: 0
          - num