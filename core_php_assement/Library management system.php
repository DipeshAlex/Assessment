<?php
class LibraryManagementSystem
{
    private $password;
    private $books = [];

    // Constructor to set the initial password
    public function __construct($password)
    {
        $this->password = $password;
    }

    // Method to display main menu
    public function displayMainMenu()
    {
        echo "\nMAIN MENU\n";
        echo "1. Add Books\n";
        echo "2. Delete Book\n";
        echo "3. Search Book\n";
        echo "4. View Book List\n";
        echo "5. Edit Book Record\n";
        echo "6. Change Password\n";
        echo "7. Close Application\n";
        echo "Enter your choice: ";
    }

    // Method to display category menu
    public function displayCategoryMenu()
    {
        echo "\nSELECT CATEGORIES\n";
        echo "1. Computer\n";
        echo "2. Electronics\n";
        echo "3. Electrical\n";
        echo "4. Civil\n";
        echo "5. Mechanical\n";
        echo "6. Architecture\n";
        echo "7. Back to main menu\n";
        echo "Enter your choice: ";
    }

    // Method to add a book
    public function addBook()
    {
        $this->displayCategoryMenu();
        $choice = intval(trim(fgets(STDIN)));
        if ($choice >= 1 && $choice <= 6) {
            $categories = ['Computer', 'Electronics', 'Electrical', 'Civil', 'Mechanical', 'Architecture'];
            $category = $categories[$choice - 1];

            echo "\nEnter the Information Below\n";
            echo "Category: $category\n";
            echo "Book ID: ";
            $bookID = trim(fgets(STDIN));
            echo "Book: ";
            $bookName = trim(fgets(STDIN));
            echo "Author: ";
            $author = trim(fgets(STDIN));
            echo "Quantity: ";
            $quantity = trim(fgets(STDIN));
            echo "Price: ";
            $price = trim(fgets(STDIN));

            // Storing book details into array
            $this->books[] = ['Category' => $category, 'ID' => $bookID, 'Name' => $bookName, 'Author' => $author, 'Quantity' => $quantity, 'Price' => $price];
            echo "Book added successfully!\n";
        } elseif ($choice == 7) {
            return;
        } else {
            echo "Invalid choice!\n";
        }
    }

    // Method to delete a book
    public function deleteBook()
    {
        echo "Enter the Book ID to delete: ";
        $bookID = trim(fgets(STDIN));
        $deleted = false;
        foreach ($this->books as $index => $book) {
            if ($book['ID'] === $bookID) {
                unset($this->books[$index]);
                $deleted = true;
                break;
            }
        }
        if ($deleted) {
            echo "Book with ID $bookID deleted successfully!\n";
        } else {
            echo "Book with ID $bookID not found!\n";
        }
    }

    // Method to search for a book
    public function searchBook()
    {
        echo "1. Search by ID\n";
        echo "2. Search by Name\n";
        echo "Enter Your Choice: ";
        $choice = intval(trim(fgets(STDIN)));
        switch ($choice) {
            case 1:
                echo "Search Books By Id\n";
                echo "Enter the book id: ";
                $searchID = trim(fgets(STDIN));
                $found = false;
                foreach ($this->books as $book) {
                    if ($book['ID'] == $searchID) {
                        $this->displayBookDetails($book);
                        $found = true;
                        break;
                    }
                }
                if (!$found) {
                    echo "Book not found!\n";
                }
                break;
            case 2:
                echo "Search Books By Name\n";
                echo "Enter the book name: ";
                $searchName = trim(fgets(STDIN));
                $found = false;
                foreach ($this->books as $book) {
                    if (stripos($book['Name'], $searchName) !== false) {
                        $this->displayBookDetails($book);
                        $found = true;
                    }
                }
                if (!$found) {
                    echo "Book not found!\n";
                }
                break;
            default:
                echo "Invalid choice!\n";
        }
    }

    // Method to display book details
    private function displayBookDetails($book)
    {
        echo "ID: {$book['ID']}\n";
        echo "Name: {$book['Name']}\n";
        echo "Author: {$book['Author']}\n";
        echo "Quantity: {$book['Quantity']}\n";
        echo "Price: Rs. {$book['Price']}\n";
       
    }

    // Method to view all books
    public function viewBookList()
    {
        if (empty($this->books)) {
            echo "No books found!\n";
        } else {
            echo "\nCATEGORY\tID\tNAME\tAUTHOR\tQTY\tPRICE\n";
            foreach ($this->books as $book) {
                echo "{$book['Category']}\t{$book['ID']}\t{$book['Name']}\t{$book['Author']}\t{$book['Quantity']}\t{$book['Price']}\n";
            }
        }
    }

    // Method to edit book record
    // Method to edit book record
    public function editBookRecord($bookID)
    {
        $found = false;
        foreach ($this->books as $index => $book) {
            if ($book['ID'] === $bookID) {
                // Prompt user for new details
                echo "Enter new Book ID: ";
                $newBookID = trim(fgets(STDIN));
                echo "Enter new Book Name: ";
                $newBookName = trim(fgets(STDIN));
                echo "Enter new Author: ";
                $newAuthor = trim(fgets(STDIN));
                echo "Enter new Quantity: ";
                $newQuantity = trim(fgets(STDIN));
                echo "Enter new Price: ";
                $newPrice = trim(fgets(STDIN));

                // Update book details
                $this->books[$index]['ID'] = $newBookID;
                $this->books[$index]['Name'] = $newBookName;
                $this->books[$index]['Author'] = $newAuthor;
                $this->books[$index]['Quantity'] = $newQuantity;
                $this->books[$index]['Price'] = $newPrice;
                $found = true;
                break;
            }
        }
        if ($found) {
            echo "Book details updated successfully!\n";
        } else {
            echo "Book with ID $bookID not found!\n";
        }
    }


    // Method to change password
    public function changePassword()
    {
        echo "Enter Old password: ";
        $oldPassword = trim(fgets(STDIN));
        if ($oldPassword === $this->password) {
            echo "Enter New password: ";
            $newPassword = trim(fgets(STDIN));
            $this->password = $newPassword;
            echo "Password successfully changed!\n";
        } else {
            echo "Invalid old password!\n";
        }
    }

 
    public function start()
    {
        while (true) {
       
        echo "Enter Password: ";
        $enteredPassword = trim(fgets(STDIN));
        if ($enteredPassword === $this->password) {
            echo "Password entered successfully!\n";
            while (true) {
                $this->displayMainMenu();
                $choice = intval(trim(fgets(STDIN)));
                switch ($choice) {
                    case 1:
                        $this->addBook();
                        break;
                    case 2:
                        $this->deleteBook();
                        break;
                    case 3:
                        $this->searchBook();
                        break;
                    case 4:
                        $this->viewBookList();
                        break;
                    case 5:
                        echo "Enter Book ID to edit: ";
                        $editBookID = trim(fgets(STDIN));
                        $this->editBookRecord($editBookID);
                        break;
                    case 6:
                        $this->changePassword();
                        break;
                    case 7:
                        echo "Application Closed\n";
                        exit();
                    default:
                        echo "Invalid choice! Please try again.\n";
                }
            }
        } else {
            echo "Incorrect password! Access denied.\n"; 
            }
        }
    }   
}

echo "Welcome to the Library Management System!\n";
$password = "123"; 
$librarySystem = new LibraryManagementSystem($password);
$librarySystem->start();