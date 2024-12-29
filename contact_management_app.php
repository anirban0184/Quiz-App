<?php
// Contact Management Terminal Based App
$contacts = [];

// Add Contacts
function addContact(array &$contacts, string $name, string $email, string $phone):void {
    $contacts[] = ['name' => $name, 'email' => $email, 'phone' => $phone];
}

// Display contacts
function displayContacts(array $contacts):void {
    if(empty($contacts)) {
        echo " No Contacts available \n";
    }else {
        foreach($contacts as $contact) {
            echo "Name: {$contact['name']}, Email: {$contact['email']}, Phone: {$contact['phone']} \n";
        }
    }
}

while(true) {
    echo "Contact Management System App \n";
    echo "1. Add Contact \n";
    echo "2. View Contacts \n";
    echo "3. Exit \n";
    $choose = (int)readline("Choose an option");
    if($choose == 1){
        $name = readline("Write Name: ");
        $email = readline ("Write Email: ");
        $phone = readline ("Write Phone: ");
        addContact($contacts, $name, $email, $phone);
    }elseif($choose == 2) {
        displayContacts($contacts);
    }elseif($choose == 3) {
        echo "Exiting... \n";
        break;
    }else {
        echo "You put wrong command \n";
    }
}