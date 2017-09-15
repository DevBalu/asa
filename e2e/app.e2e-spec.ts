import { AsaMapsPage } from './app.po';

describe('asa-maps App', function() {
  let page: AsaMapsPage;

  beforeEach(() => {
    page = new AsaMapsPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
