from collections import defaultdict

orders = [
    {"table": 1, "items": ["burger", "fries"]},
    {"table": 2, "items": ["burger", "burger", "fries"]},
    {"table": 1, "items": ["salad"]},
    {"table": 2, "items": ["fries"]},
]


def summarise_table_orders() -> str:
    summary = defaultdict(lambda: defaultdict(int))
    for order in orders:
        table_number = order["table"]
        for item in order["items"]:
            summary[table_number][item] += 1
    return humanise_table_order(summary)


def humanise_table_order(summary: dict) -> str:
    order = ""
    for table_no in summary:
        table = summary[table_no]
        items = ""

        counter = 1
        for item in table:
            items += f"{table[item]} {item}"
            counter += 1

            if counter < len(table):
                items += ", "
            if counter == len(table):
                items += ", and "

        order += f"Table {table_no} ordered {items}\n"

    return order


print(summarise_table_orders())
