describe('Login Nova_Tower_Babel', () => {

    it('Article Sabrina Fontanini', () => {
        cy.visit('/nova/login')
        cy.get('input[name=email]').type('sf@webmapp.it')
        cy.get('input[name=password]').type('webmapp2020')
        cy.get('button').contains('Login').click()
        cy.url().should('contain', '/')

        cy.get('span.text-90').click()
        cy.get('#userProfile > a').click()



        cy.get('#nova > div > div.min-h-screen.flex-none.pt-header.min-h-screen.w-sidebar.bg-grad-sidebar.px-6 > ul > li:nth-child(1) > a').click()
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div.flex > div.w-full.flex.items-center.mb-6 > div.flex-no-shrink.ml-auto > a').click()
        cy.get('#title\\.en').type('Buon Natale')
        cy.get('#body\\.en').type('Renne ed Elfi scdwbcwbebcwbbccduincdnscndsn')
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > form > div.mb-8 > div > div:nth-child(1) > div.flex.select-none.pt-4.px-8 > div > a:nth-child(2)\n').click()
        cy.get('#title\\.it').type('Feliz Navidad')
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > form > div.mb-8 > div > div:nth-child(2) > div.flex.select-none.pt-4.px-8 > div > a:nth-child(2)').click()
        cy.get('#body\\.it').type('Elfos y renos todo el día con Santa Claus.')
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > form > div.mb-8 > div > div:nth-child(1) > div.flex.select-none.pt-4.px-8 > div > a:nth-child(3)').click()
        cy.get('#title\\.fr').type('С Рождеством')
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > form > div.mb-8 > div > div:nth-child(2) > div.flex.select-none.pt-4.px-8 > div > a:nth-child(3)').click()
        cy.get('#body\\.fr').type('Эльфы и олени весь день с Дедом Морозом')

        cy.get('select.form-control.form-select.w-full').select('Sabrina Fontanini')
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > form > div.flex.items-center > button:nth-child(3) > span').click()


        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div.mb-8 > div > div.card.mb-6.py-3.px-6 > div:nth-child(2) > div:nth-child(2) > div > div.w-3\\/4.py-4.break-words > p').each(($e, index, $list) => {
            const text = $e.text()
            expect(text).to.eq('\n        Buon Natale\n      ')
        })
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div.mb-8 > div > div.card.mb-6.py-3.px-6 > div:nth-child(3) > div:nth-child(2) > div > div.w-3\\/4.py-4.break-words > p').each(($e, index, $list) => {
            const text = $e.text()
            expect(text).to.eq('\n        Renne ed Elfi scdwbcwbebcwbbccduincdnscndsn\n      ')
        })
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div.mb-8 > div > div.card.mb-6.py-3.px-6 > div:nth-child(2) > div.flex.select-none.pt-4 > div > a:nth-child(2)').click()

        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div.mb-8 > div > div.card.mb-6.py-3.px-6 > div:nth-child(2) > div:nth-child(2) > div > div.w-3\\/4.py-4.break-words > p').each(($e, index, $list) => {
            const text = $e.text()
            expect(text).to.eq('\n        Buon Natale\n      ')
        })
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div.mb-8 > div > div.card.mb-6.py-3.px-6 > div:nth-child(3) > div.flex.select-none.pt-4 > div > a:nth-child(2)').click()

        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div.mb-8 > div > div.card.mb-6.py-3.px-6 > div:nth-child(3) > div:nth-child(3) > div > div.w-3\\/4.py-4.break-words > p').each(($e, index, $list) => {
            const text = $e.text()
            expect(text).to.eq('\n        Elfos y renos todo el día con Santa Claus.\n      ')
        })
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div.mb-8 > div > div.card.mb-6.py-3.px-6 > div:nth-child(2) > div.flex.select-none.pt-4 > div > a:nth-child(3)').click()

        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div.mb-8 > div > div.card.mb-6.py-3.px-6 > div:nth-child(2) > div:nth-child(4) > div > div.w-3\\/4.py-4.break-words > p').each(($e, index, $list) => {
            const text = $e.text()
            expect(text).to.eq('\n        С Рождеством\n      ')
        })
        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div.mb-8 > div > div.card.mb-6.py-3.px-6 > div:nth-child(3) > div.flex.select-none.pt-4 > div > a:nth-child(3)').click()

        cy.get('#nova > div > div.content > div.px-view.py-view.mx-auto > div.relative > div.mb-8 > div > div.card.mb-6.py-3.px-6 > div:nth-child(3) > div:nth-child(4) > div > div.w-3\\/4.py-4.break-words > p').each(($e, index, $list) => {
            const text = $e.text()
            expect(text).to.eq('\n        Эльфы и олени весь день с Дедом Морозом\n      ')
        })


        cy.get('span.text-90').click()
        cy.get('#logout > a').click()
    })


})
