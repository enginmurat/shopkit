<?php l::set([

// multiple pages 

'username' => 'Benutzername',
'password' => 'Passwort',
'login' => 'Einloggen',
'register' => 'Registrieren',

'honeypot-label' => 'Sie dieses Feld nicht ausfüllen. (Spamschutz)',

'email-address' => 'E-Mail Adresse',
'first-name' => 'Vorname',
'last-name' => 'Nachname',
'full-name' => 'Voller Name',
'country' => 'Land',
'country-help' => 'Um die Versandkosten zu kalkulieren',

'brands' => 'Marken',
'tags' => 'Tagen',

'buy' => 'Kaufen',
'out-of-stock' => 'Ausverkauft',

'price' => 'Preis',

'subtotal' => 'Zwischensumme',
'shipping' => 'Versand',
'tax' => 'Umsatzsteuer',
'total' => 'Insgesamt',

'from' => 'Von',
'remaining' => 'verbleibende',

'new-page' => 'Neue Seite',
'new-category' => 'Neue Kategorie',
'new-product' => 'Neues Produkt',

// plugins/shopkit/shopkit.php

'activate-account' => 'Aktiviere deinen Konto',
'activate-message-first' => 'Ihre E-Mail-Adresse wurde verwendet, um ein Konto bei '.str_replace('www.', '', $_SERVER['HTTP_HOST']).' zu erstellen. Folgen Sie bitte den unten stehenden Link Ihr Konto zu aktivieren.',
'activate-message-last' => 'Wenn Sie dieses Konto nicht erstellt haben, wird keine Aktion Ihrerseits erforderlich. Das Konto wird inaktiv bleiben.',
'reset-password' => 'Setze dein Passwort zurück',
'reset-message-first' => 'Jemand bat um ein Zurücksetzen des Kennworts für Ihr Konto bei '.str_replace('www.', '', $_SERVER['HTTP_HOST']).'. Folgen Sie bitte den unten stehenden Link zum Zurücksetzen des Passworts.',
'reset-message-last' => 'Wenn Sie dieses Passwort-Reset angefordert hat, wird keine Aktion Ihrerseits erforderlich.',


// plugins/shopkit/snippets/cart.process.php

'qty' => 'Anz.: ',


// plugins/shopkit/gateways/1-paypalexpress/process.php

'redirecting' =>  'Weiterleiten...',
'continue-to-paypal' => 'Weiter zu PayPal',


// plugins/shopkit/gateways/square/process.php

'card-number' => 'Kartennummer',
'expiry-date' => '',
'cvv' => '',
'address-line-1' => 'Adresse',
'address-line-2' => 'Adresse (Reihe 2)',
'city' => 'Stadt',
'state' => 'Bundesland',
'postal-code' => 'Postleitzahl',
'postal-code-verify' => '(Um die Kreditkarte zu überprüfen)',
'optional' => 'Fakultativ',

'square-error' => 'Entschuldigung, wir konnten die Zahlung nicht verarbeiten.',
'square-card-no-charge' => 'Ihre Karte wurde nicht belastet',

'try again' => 'Versuch es noch einmal',


// site/plugins/shopkit/snippets/header.notifications.php

'notification-account' => 'Sie haben noch keine Benutzer angelegt. <a href="'.url('panel/install').'" title="Installationsseite">Benutzer anlegen</a>.',
'notification-login' => 'Lassen Sie uns beenden Sie Ihren Shop einrichten! <a href="#user">Melden Sie</a> sich an, um fortzufahren.',
'notification-options' => 'Sie haben noch keine Shop-Optionen angelegt. <a href="'.url('panel/options').'" title="Shop-Optionen">Währung, Versand, und Umsatzsteuer definieren</a>.',
'notification-category' => 'Sie haben noch keine Produkt-Kategorien angelegt. <a href="'.url('panel/pages/shop/add').'" title="Kategorie anlegen">Erste Kategorie anlegen</a>.',
'notification-product-first' => 'Sie haben noch keine Produkt angelegt. <a href="'.url('panel').'/pages/',
'notification-product-last' => '/add" title="Produkt anlegen">Erstellen Sie Ihr erstes Produkt mit dem Armaturenbrett</a>.',
'notification-license' => 'Dieser Shop hat keine Shopkit-Lizenz. Geben Sie den Lizenzschlüssen in der <strong>config.php</strong> Datei ein, bevor Sie die Website live schalten.',
'notification-discount' => 'Ihr Rabatt-Code <strong><code>'.s::get('discountcode').'</code></strong> wird an der Kasse aktiviert werden.',
'notification-giftcertificate' => 'Ihr Geschenkgutschein <strong><code>'.s::get('giftcode').'</code></strong> wird an der Kasse aktiviert werden.',
'discount-code-help' => 'Verwenden Sie diesen Rabatt Code jedes Mal, wenn Sie sich anmelden.',

'notification-login-failed' => 'Leider können wir konnte Sie nicht anmelden in. Entweder ist das Kennwort oder E-Mail-Adresse nicht richtig ist.',


// site/plugins/shopkit/snippets/header.nav.php

'view-cart' => 'Warenkorb anzeigen',


// site/plugins/shopkit/snippets/header.user.php

'edit-page' =>  'Seite bearbeiten',
'dashboard' => 'Instrumententafel',
'site-options' =>  'Einstellungen',
'view-orders' =>  'Bestellungen anzeigen',
'my-account' =>  'Mein Benutzerkonto',
'logout' =>  'Ausloggen',


// site/plugins/shopkit/snippets/order.pdf.php

'bill-to' => 'Rechnung an',
'invoice' => 'Rechnung',
'transaction-id' => 'Transaktions-ID',


// site/plugins/shopkit/snippets/mail.order.notify.php
'order-notification-subject' => '['.$site->title().'] New order placed',
'order-notification-message' => 'Jemand hat einen Auftrag von Ihrem Geschäft bei '.server::get('server_name').'. Zeigen Sie die Transaktionsdetails an:',


// site/plugins/shopkit/snippets/mail.order.update.error.php
'order-error-subject' => '['.$site->title().'] Problem mit einer neuen Bestellung',
'order-error-message-update' => "Die Zahlung wurde empfangen, aber etwas schief ging mit dem letzten Schritt der Transaktion.\n\n",
'order-error-message-update-admin' => "Entweder wurden die Details des Kunden nicht gespeichert; Das Inventar wurde nicht korrekt aktualisiert; Oder die Mitarbeiterauftragsbenachrichtigung wurde nicht gesendet.\n\nZeigen Sie die Transaktionsdetails an:",
'order-error-message-update-customer' => 'Bitte kontaktieren Sie '.$site->title().' für weitere Details.',


// site/plugins/shopkit/snippets/mail.order.tamper.php
'order-error-message-tamper' => "Eine Zahlung wurde eingegangen, aber sie stimmt nicht mit der Bestellung überein.\n\nZeigen Sie die Transaktionsdetails an:",


// site/plugins/shopkit/snippets/mail.order.notify.status.php

'order-notify-status-subject' => '['.$site->title().'] Ihre Auftragsdetails',
'order-notify-status-message' => 'Ihre Bestellung von '.server::get('server_name').' wurde aktualisiert. Zeigen Sie die Transaktionsdetails an:',


// site/plugins/shopkit/snippets/sidebar.php

'new-customer' =>  'Neuer Kunde?',
'forgot-password' => 'Passwort vergessen',

'subpages' =>  'Seiten',

'search-shop' =>  'Shop durchsuchen',
'search' =>  'Suchen',

'hours-of-operation' => 'Öffnungszeiten',
'phone' => 'Telefon',
'email' => 'E-Mail',
'address' => 'Adresse',


// site/plugins/shopkit/snippets/slideshow.product.php

'prev' =>  'Zurück',
'next' =>  'Weiter',
'view-grid' =>  'Gitteransicht',


// site/plugins/shopkit/templates/account.php

'account-success' => 'Ihre Informationen wurden aktualisiert.',
'account-failure' => 'Entschuldigung, das hat nicht funktioniert. Bitte stellen Sie sicher, dass alle Informationen korrekt eingegeben wurden, insbesondere die E-Mail Adresse.',
'account-delete-error' => 'Entschuldigung, das Benutzerkonto konnte nicht gelöscht werden.',
'account-reset' => 'Bitte wählen Sie ein neues Passwort und stellen Sie sicher, dass Ihre Informationen sind up-to-date.',
'password-help' => 'Leerlassen um das Passwort beizubehalten',
'update' => 'Aktualisieren',
'delete-account' => 'Benutzerkonto löschen',
'delete-account-text' => 'Wenn Sie auf diesen Button klicken, gibt es kein Zurück mehr. Ihr Benutzerkonto wird unumkehrbar gelöscht.',
'delete-account-verify' => 'Benutzerkonto löschen. Ich bin mir sicher.',
'username-no-account' => 'Der Benutzername konnte nicht geändert werden.',
'discount-code' => 'Rabattcode',


// site/plugins/shopkit/templates/cart.php

'no-cart-items' => 'Keine Artikel im Warenkorb!',

'product' => 'Produkt',
'quantity' => 'Anzahl',

'delete' => 'Löschen',

'update-country' => 'Land ändern',
'update-shipping' => 'Aktualisierung Versand',
'free-shipping' => 'Kostenloser Versand',

'sandbox-message' => 'Sie befinden sich im Sandbox-Modus. Dieser Einkauf wird nicht berechnet.',

'pay-now' => 'Jetzt bezahlen',
'pay-later' => 'Später bezahlen',

'discount' => 'Rabatt',
'gift-certificate' => 'Geschenkgutschein',
'code-apply' => 'Bewerben Code',

'remaining' => 'verbleibend',

'no-tax' => 'Keine Steuer',
'no-shipping' => 'Kostenloser Versand',

'terms-conditions' => 'Durch die Zusammenarbeit mit dieser Transaktion fortfahren, stimmen Sie den', // "Allgemeine Geschäftsbedingungen" wird als Link in der Vorlage angehängt.


// site/plugins/shopkit/templates/confirm.php

'order-details' => 'Bestelldetails',
'personal-details' => 'Persönliche Details',
'confirm-order' => 'Bestellung bestätigen',
'mailing-address' => 'Postanschrift',
'error-address' => 'Bitte geben Sie Ihre Postanschrift an.',
'error-name-email' => 'Bitte geben Sie Ihren Namen und Ihre E-Mail-Adresse an.',


// site/plugins/shopkit/templates/orders.php

'no-orders' => 'Sie haben noch keine Einkäufe getätigt.',
'no-auth-orders' => 'Um die Einkäufe über Ihre E-Mail Adresse einzusehen, müssen Sie sich <a href="#user">registrieren oder einloggen</a>.',
'no-filtered-orders' => 'Es gibt keine Einkäufe mit diesem Status. <a href="orders">Zurück zur vollständigen Liste</a>.',

'products' => 'Produkte',
'status' => 'Status',

'download-invoice' => 'Rechnung herunterladen (PDF)',
'download-files' => 'Dateien herunterladen',
'download-file' => 'Datei herunterladen',
'download-expired' => 'Download abgelaufen',
'view-on-paypal' => 'Auf PayPal anzeigen',

'abandoned' => 'Aufgegebener',
'pending' => 'Ausstehend',
'paid' => 'Bezahlt',
'shipped' => 'Verschickt',

'filter' => 'Filter',


// site/plugins/shopkit/templates/product.php

'related-products' => 'Ähnliche Produkte',


// site/plugins/shopkit/templates/register.php

'register-success' => 'Vielen Dank, Ihr Benutzerkonto wurde registriert! Sie können sich nun <a href="#user">einloggen</a>.',
'register-failure' => 'Entschuldigung, das hat nicht funktioniert. Bitte versuche es erneut.',
'register-failure-email' => 'Please provide an email address.',
'register-failure-fullname' => 'Please provide your full name.',
'register-failure-country' => 'Please select your country.',
'register-failure-verification' => 'Wir konnten Ihre Bestätigungs-E-Mail nicht senden. Bitte kontaktieren Sie den Verkäufer direkt, um Ihr Konto zu aktivieren.',
'register-duplicate' => 'Entschuldigung, es gibt bereits ein Benutzerkonto mit dieser E-Mail Adresse.',


// site/plugins/shopkit/templates/reset.php
'reset-submit' => 'Passwort zurücksetzen',
'reset-success' => 'Sie erhalten eine E-Mail mit Anweisungen erhalten Sie Ihr Passwort zurücksetzen.',
'reset-error' => 'Leider konnten wir nicht das Konto finden.',


// site/plugins/shopkit/templates/search.php

'no-search-results' => 'Entschuldigung, es gibt keine Suchergebnisse zu diesem Begriff.',

]); ?>
