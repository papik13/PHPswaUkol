# Jednoduchá kalkulačka v PHP

## Pavel Kadaňka 58834

## PRINCIP PROGRAMU

Tento projekt je jednoduchá webová aplikace pro kalkulačku napsaná v PHP, která umožňuje uživatelům provádět základní matematické operace jako jsou sčítání, odčítání, násobení a dělení. Aplikace se skládá z jednoho hlavního souboru `index.php`, který obsahuje uživatelské rozhraní, a doprovodného souboru `script.php`, který zpracovává logiku výpočtu.

### index.php

Soubor `index.php` obsahuje HTML kód pro zobrazení formuláře kalkulačky. Uživatelé mohou do formuláře zadat dva číselné vstupy a vybrat typ operace (sčítání, odčítání, násobení, dělení) z rozbalovacího seznamu. Po odeslání formuláře se data odesílají na server pomocí metody POST.

### script.php

V souboru `script.php` je implementována logika pro zpracování vstupů od uživatele a výběr matematické operace. Na základě vybrané operace skript provede příslušný výpočet a zobrazí výsledek. Skript také obsahuje kontrolu pro dělení nulou, aby se předešlo chybám při výpočtech.

### styles.css

Stylový soubor `styles.css` definuje vzhled uživatelského rozhraní kalkulačky. Zahrnuje styly pro zarovnání, okraje, ohraničení a barvy, aby bylo uživatelské rozhraní přívětivější a vizuálně přitažlivější.

Celkově tento projekt demonstruje základní použití PHP a HTML pro vytvoření interaktivní webové aplikace, která umožňuje uživatelům provádět jednoduché matematické výpočty.

# start the project with: apache2ctl start


