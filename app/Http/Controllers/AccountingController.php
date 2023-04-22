<?php

namespace App\Http\Controllers;

use IFRS\Models\Entity;
use IFRS\Models\Category;
use IFRS\Models\Currency;
use IFRS\Models\Vat;
use IFRS\Models\Account;
use IFRS\Models\ReportingPeriod;
use IFRS\Transactions\CashSale;
use IFRS\models\LineItem;
use IFRS\Transactions\ClientInvoice;
use Illuminate\Http\Request;
use IFRS\Models\Assignment;
use IFRS\Transactions\SupplierBill;

class AccountingController extends Controller
{

    public function index()
    {
        return view('accounting.index');
    }

    public function accounts()
    {
        $acc_categories = [
            'NON_CURRENT_ASSET',
            'CONTRA_ASSET',
            'INVENTORY',
            'BANK',
            'CURRENT_ASSET',
            'RECEIVABLE',
            'NON_CURRENT_LIABILITY',
            'CONTROL',
            'CURRENT_LIABILITY',
            'PAYABLE',
            'EQUITY',
            'OPERATING_REVENUE',
            'OPERATING_EXPENSE',
            'NON_OPERATING_REVENUE',
            'DIRECT_EXPENSE',
            'OVERHEAD_EXPENSE',
            'OTHER_EXPENSE',
            'RECONCILIATION',
        ];

        $categories = Category::all();
        $accounts = Account::all();
        return view('accounting.accounts', ['accounts'=> $accounts, 'categories'=>$categories, 'account_types'=>$acc_categories]);
    }

    public function store_account(Request $request){
        $acc = Account::create([
            'name'=>$request->name,
            'account_type'=>$request->type,
            'category_id'=>$request->category,
            'description'=>$request->description,
        ]);

        return redirect()->route('accounting.accounts');
    }

    // SETTINGS
    public function currency()
    {
        $entity = Entity::first();
        $currencies = Currency::all();
        return view('accounting.settings.currency', ['currencies' => $currencies, "entity" => $entity]);
    }

    public function store_currency()
    {
        $entity = Entity::first();
        $currency = Currency::create([
            "name" => "Kenya Shillings",
            "currency_code" => "KES"
        ]);
        $entity->currency_id = $currency->id;
        $entity->save();
        return redirect()->route('accounting.settings.currencies');
    }

    public function categories()
    {
        $acc_categories = [
            'NON_CURRENT_ASSET',
            'CONTRA_ASSET',
            'INVENTORY',
            'BANK',
            'CURRENT_ASSET',
            'RECEIVABLE',
            'NON_CURRENT_LIABILITY',
            'CONTROL',
            'CURRENT_LIABILITY',
            'PAYABLE',
            'EQUITY',
            'OPERATING_REVENUE',
            'OPERATING_EXPENSE',
            'NON_OPERATING_REVENUE',
            'DIRECT_EXPENSE',
            'OVERHEAD_EXPENSE',
            'OTHER_EXPENSE',
            'RECONCILIATION',
        ];

        $categories = Category::all();
        return view('accounting.settings.categories', ['categories' => $categories, 'category_list' => $acc_categories]);
    }

    public function store_category(Request $request)
    {
        Category::create([
            'name' => $request->name,
            'category_type' => $request->type
        ]);
        return redirect()->route('accounting.settings.categories');
    }

    public function vat_page()
    {
        $vat = VAT::get();
        return view('accounting.settings.vat', ['vat' => $vat]);
    }

    public function store_vat(Request $request)
    {
        $account =  Account::create([
            'name' => $request->account_name,
            'account_type' => Account::CONTROL,
        ]);
        Vat::create([
            'name' => $request->name,
            'code' => $request->code,
            'rate' => $request->rate,
            'account_id' => $account->id
        ]);

        return redirect()->route('accounting.settings.vat');
    }

    public function period_page()
    {
        $periods = ReportingPeriod::all();
        return view('accounting.settings.periods', ['periods' => $periods]);
    }

    public function store_period(Request $request)
    {
        $period = ReportingPeriod::create([
            'period_count' => $request->count,
            'calendar_year' => $request->year,
        ]);
        return redirect()->route('accounting.settings.period');
    }



    public function entity()
    {
        $entity = Entity::create([
            "name" => $request->name,
        ]);
        $currency = Currency::create([
            "name" => "Kenya Shillings",
            "currency_code" => "KES"
        ]);
        // Set the currency as the Entity's Reporting Currency 
        $entity->currency_id = $currency->id;
        $entity->save();

        $outputVat = Vat::create([
            'name' => "Standard Output Vat",
            'code' => "O",
            'rate' => 20,
            'account_id' => Account::create([
                'name' => "Sales VAT Account",
                'account_type' => Account::CONTROL,
            ])
        ]);

        $inputVat = Vat::create([
            'name' => "Standard Input Vat",
            'code' => "I",
            'rate' => 10,
            'account_id' =>  Account::create([
                'name' => "Input VAT Account",
                'account_type' => Account::CONTROL,
            ])
        ]);

        $bankAccount = Account::create([
            'name' => "Bank Account",
            'account_type' => Account::BANK,
        ]);

        $revenueAccount = Account::create([
            'name' => "Sales Account",
            'account_type' => Account::OPERATING_REVENUE,
        ]);

        $clientAccount = Account::create([
            'name' => "Example Client Account",
            'account_type' => Account::RECEIVABLE,
        ]);

        $supplierAccount = Account::create([
            'name' => "Example Supplier Account",
            'account_type' => Account::PAYABLE,
        ]);

        $opexAccount = Account::create([
            'name' => "Operations Expense Account",
            'account_type' => Account::OPERATING_EXPENSE,
        ]);

        $assetAccount = Account::create([
            'name' => "Office Equipment Account",
            'account_type' => Account::NON_CURRENT_ASSET,
        ]);

        $period = ReportingPeriod::create([
            'period_count' => 1,
            'calendar_year' => 2022,
        ]);

        $cashSale = CashSale::create([
            'account_id' => $bankAccount->id,
            'date' => Carbon::now(),
            'narration' => "Example Cash Sale",
        ]);


        $cashSaleLineItem = LineItem::create([
            'account_id' => $revenueAccount->id,
            'narration' => "Example Cash Sale Line Item",
            'quantity' => 1,
            'amount' => 100,
        ]);

        $cashSaleLineItem->addVat($outputVat);
        $cashSale->addLineItem($cashSaleLineItem);
        $cashSale->post(); // This posts the Transaction to the Ledger

        $clientInvoice = ClientInvoice::create([
            'account_id' => $clientAccount->id,
            'date' => Carbon::now(),
            'narration' => "Example Credit Sale",
        ]);

        $clientInvoiceLineItem = LineItem::create([
            'account_id' => $revenueAccount->id,
            'narration' => "Example Credit Sale Line Item",
            'quantity' => 2,
            'amount' => 50,
        ]);

        $clientInvoiceLineItem->addVat($outputVat);
        $clientInvoice->addLineItem($clientInvoiceLineItem);

        //Transaction save may be skipped as post() saves the Transaction automatically
        $clientInvoice->post();



        $cashPurchase = CashPurchase::create([
            'account_id' => $clientAccount->id,
            'date' => Carbon::now(),
            'narration' => "Example Cash Purchase",
        ]);

        $cashPurchaseLineItem = LineItem::create([
            'account_id' => $opexAccount->id,
            'narration' => "Example Cash Purchase Line Item",
            'quantity' => 4,
            'amount' => 25,
        ]);


        $cashPurchaseLineItem->addVat($inputVat);
        $cashPurchase->addLineItem($cashPurchaseLineItem);
        $cashPurchase->post();

        $supplierBill = SupplierBill::create([
            'account_id' => $supplierAccount->id,
            'date' => Carbon::now(),
            'narration' => "Example Credit Purchase",
        ]);

        $supplierBillLineItem = LineItem::create([
            'vat_id' => $inputVat->id,
            'account_id' => $assetAccount->id,
            'narration' => "Example Credit Purchase Line Item",
            'quantity' => 4,
            'amount' => 25,
        ]);

        $supplierBillLineItem->addVat($inputVat);
        $supplierBill->addLineItem($supplierBillLineItem);
        $supplierBill->post();

        $clientReceipt = ClientReceipt::create([
            'account_id' => $clientAccount->id,
            'date' => Carbon::now(),
            'narration' => "Example Client Payment",
        ]);

        $clientReceiptLineItem = LineItem::create([
            'account_id' => $bankAccount->id,
            'narration' => "Part payment for Client Invoice",
            'quantity' => 1,
            'amount' => 50,
        ]);

        $clientReceipt->addLineItem($clientReceiptLineItem);
        $clientReceipt->post();


        $assignment = Assignment::create([
            'assignment_date' => Carbon::now(),
            'transaction_id' => $clientReceipt->id,
            'cleared_id' => $clientInvoice->id,
            'cleared_type' => $clientInvoice->clearedType,
            'amount' => 50,
        ]);

        return view('accounting.settings.entity');
    }
}
